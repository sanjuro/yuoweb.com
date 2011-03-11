<?php
/*
 * This file is part of the sfMultisiteThemePlugin package.
 * (c) James Andrews <thenetimp+symfony@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 *
 * @package    symfony
 * @subpackage plugin
 * @author     James Andrews <thenetimp+symfony@gmail.com>
 * @version    SVN: $Id:  $
 */ 
class sfMultisiteThemeView extends sfPHPView
{
	public function configure()
	{
	    // We want to do as the parent
	    parent::configure();
	    
        // Get the theme associated with the profile id.
        $profileQuery = Doctrine_query::create()
                ->from("sfMultisiteThemeProfile p")
                ->where("p.id='".SF_MULTISITE_THEME_PROFILE_ID."'");
        $profile = $profileQuery->execute();
     

        // Set the theme as a constant.
        $themeDir = $profile[0]->sfMultisiteThemeThemeInfo['theme_name'];

        // Check to see if the user can over ride the theme.
        //if(sfConfig::get('app_sfMultisiteProfilePlugin_enable_user_themes'))
        // {
        //     $controlClass = sfConfig::get('app_sfMultisiteProfilePlugin_profile_class');
        //     $controlMethod = sfConfig::get('app_sfMultisiteProfilePlugin_profile_theme_field_name');
        //      $userThemeId = call_user_func_array(array($controlClass, $controlMethod), array($_SERVER['HTTP_HOST']));        
        // }

        // If the themeDir layout file is readable then use the layout.
        if(is_readable(sfConfig::get('sf_web_dir').'/themes/'.$themeDir.'/layout.php'))
        {
            print $this->setDecoratorDirectory(sfConfig::get('sf_web_dir').'/themes/'.$themeDir);
            if(is_readable(sfConfig::get('sf_web_dir').'/themes/'.$themeDir.'/layout.css'))
            {
                sfContext::getInstance()->getResponse()->addStyleSheet('/themes/'.$themeDir.'/layout.css');
            }
        }
        
    }
}