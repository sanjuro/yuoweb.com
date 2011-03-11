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
class sfMultisiteThemeFilter extends sfFilter
{
	public function execute($filterChain)
	{
		// Execute this filter only once
		if ($this->isFirstCall())
		{            
            $table = Doctrine::getTable('sfMultisiteThemeProfileHost');
            
            $hostQuery = $table->createQuery()
                               ->where("host_uri='".$_SERVER['SERVER_NAME']."'");
            $hosts = $hostQuery->fetchArray();
           
            if(count($hosts) == 1)
            {
                define('SF_MULTISITE_THEME_PROFILE_ID',$hosts[0]['sf_multisite_theme_profile_id']);
            }
            else
            {
                // Defaults to 0 if no site is found.
                define('SF_MULTISITE_THEME_PROFILE_ID',0);
            }
        }

        // Execute next filter
        $filterChain->execute();
    }
}