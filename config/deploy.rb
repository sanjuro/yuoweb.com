set :application, "yUoweb"
set :domain,      "ec2-72-44-62-26.compute-1.amazonaws.com"
set :deploy_to,   "/usr/share/#{domain}"
ssh_options[:forward_agent] = true
default_run_options[:pty]   = true  # Must be set for the password prompt from git to work
set :repository,  "git@github.com:sanjuro/yuoweb.com.git"
set :scm,         :git
# Or: `accurev`, `bzr`, `cvs`, `darcs`, `subversion`, `mercurial`, `perforce`, `subversion` or `none`

ssh_options[:keys] = [File.join(ENV["HOME"], ".ssh", "shadley_yuoweb")] 

set :user, 'shadley'

set :deploy_via, :remote_cache
set :scm_verbose, true

role :web,        domain                               # Your HTTP server, Apache/etc
role :app,        domain                               # This may be the same as your `Web` server
role :db,         domain, :primary => true             # This is where db migrations will run

set :branch, "master"
set :use_sudo, false
set :keep_releases,  6
