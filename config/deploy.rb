set :application, "yuoweb"
set :repository,  "https://sanjuro@github.com/sanjuro/yuoweb.com.git"

# If you aren't deploying to /u/apps/#{application} on the target
# servers (which is the default), you can specify the actual location
# via the :deploy_to variable:
set :deploy_to, "/home/yuowebco/"

# If there's no access to the repository from the production server, deploy via uploading tarball to the server
#set :deploy_via, :copy

# If you aren't using Subversion to manage your source code, specify
# your SCM below:
set :scm, :git

role :app, "yuoweb.com"
role :web, "yuoweb.com"
role :db,  "yuoweb.com", :primary => true

set :user, "codingspree"

# path to php executable 
set :php, "/usr/local/php5/bin/php5"

# symfony application name (used for migrations)
set :sf_app, "frontend"

namespace (:deploy) do

  desc <<-DESC
    [internal] Overriding original task to fit to symfony project needs
  DESC
  task :finalize_update, :except => { :no_release => true } do
    run "chmod -R g+w #{latest_release}" if fetch(:group_writable, true)

    run <<-CMD
      rm -rf #{latest_release}/log &&
      ln -s #{shared_path}/log #{latest_release}/log
    CMD
    
    run <<-CMD
      rm -rf #{latest_release}/cache &&
      ln -s #{shared_path}/cache #{latest_release}/cache
    CMD
    
    stamp = Time.now.utc.strftime("%Y%m%d%H%M.%S")
    asset_paths = %w(images css js).map { |p| "#{latest_release}/web/#{p}" }.join(" ")
    run "find #{asset_paths} -exec touch -t #{stamp} {} ';'; true", :env => { "TZ" => "UTC" }
  end
  
  desc <<-DESC
    Overriding original task to exclude restart
  DESC
  task :default do
    update
  end
  
  desc <<-DESC
    Overriding original task to use symfoy migrations (via sfMigrationsLightPlugin)
  DESC
  task :migrations do
    update
    sf.migrate
  end  
  
  after "deploy:update", 'deploy:customize'
  
  desc <<-DESC
    All custom tasks will be here
  DESC
  task :customize do
    # custmize it here
    sf.symlinks
    sf.remove_dev_environments
    
    # clear cache
    sf.cc
  end
  
end


namespace (:sf) do
  
  desc <<-DESC
    Run the "symfony migrate" task
  DESC
  task :migrate do
    run "cd #{current_path} && #{php} symfony migrate #{sf_app}"    
  end

  desc <<-DESC
    Run the "symfony cc" task
  DESC
  task :cc do
    run "cd #{current_path} && rm -rf cache/*"
  end

  desc <<-DESC
    Create symlink to symfony specific targets
  DESC
  task :symlinks do
    # symlink to database.yml
    run "rm -rf #{current_path}/config/databases.yml"
    run "ln -s #{shared_path}/databases.yml #{current_path}/config/databases.yml"

    # symlink to config.php    
    run "rm -rf #{current_path}/config/config.php"
    run "ln -s #{shared_path}/config.php #{current_path}/config/config.php"

    # symlink to sf data dir    
    run "rm -rf #{current_path}/web/sf"
    run "ln -s /path/to/sf/data/dir #{current_path}/web/sf"
        
    # symlink to uploads    
    run "rm -rf #{current_path}/web/uploads"
    run "ln -s #{shared_path}/uploads #{current_path}/web/uploads"
    
  end 
  
  desc <<-DESC
    Remove DEV environments
  DESC
  task :remove_dev_environments do
    run "rm -rf #{current_path}/web/*_dev.php"    
  end 
  
  desc <<-DESC
    Disable symfony application
  DESC
  task :disable do
    run "cd #{current_path} && #{php} symfony disable #{sf_app} prod"    
  end 
  
  desc <<-DESC
    Enable symfony application
  DESC
  task :enable do
    run "cd #{current_path} && #{php} symfony enable #{sf_app} prod"    
  end   
end