<?php use_stylesheet('network.css') ?>
<?php use_helper('Text') ?>

<?php use_helper('jQuery') ?>
<?php jq_add_plugins_by_name(array('ui')) ?>

<?php slot( 'title', 'yUoWeb - Showing Network: '.$network->getTitle()  )?>
 
<div id="network">
  <h1><?php echo $network->getTitle()  ?></h1> 
  <?php if ($network->getLogo()): ?>
    <div class="logo">
      <a href="<?php echo $network->getUrl() ?>">
        <img src="/uploads/networks/<?php echo $job->getLogo() ?>"
          alt="<?php echo $network->getClient() ?> logo" />      </a>    </div>  <?php endif; ?> 
  <div class="description">
    <?php echo simple_format_text($network->getDescription()) ?>  </div>
 
  <div style="padding: 20px 0">    <a href="<?php echo url_for('network/edit?id='.$network->getId()) ?>">      <?php __('Edit')?>    </a>  </div>
  
  <div class="demo">

	<div id="tabs">
		<ul>			<li><a href="#tabs-1">Nunc tincidunt</a></li>			<li><a href="#tabs-2">Proin dolor</a></li>			<li><a href="#tabs-3">Aenean lacinia</a></li>		</ul>		<div id="tabs-1">			<p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>		</div>		<div id="tabs-2">			<p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>		</div>		<div id="tabs-3">			<p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>			<p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>		</div>	</div>
	
</div>
  
  <div id="network_layout">  	<ul id="featurelist">  		<li id="title" class="nonsortable">Title</li>  		<li id="navigation" class="nonsortable">Navigation</li>  	<?php foreach ( $features as $feature ): ?>  		<li id="<?php echo $feature->getId(); ?>" class="sortable"><?php echo $feature->getTitle() ?></li>  	<?php endforeach; ?>  		<li id="footer" class="nonsortable">Footer</li>  	</ul>  </div></div>
  <script type="text/javascript">$(document).ready(  function()   {    $("#featurelist").sortable(    {       items: '.sortable',      update: function(event, ui)       {		var featureOrder = $(this).sortable('toArray').toString();		$.post('<?php echo url_for('@feature_reorder')?>', {featureOrder:featureOrder});      }     
    } );
	$( "#featurelist li.nonsortable" ).disableSelection();	
	$(function() {		$( "sortable" ).draggable();		$( "#network_layout" ).droppable({			drop: function( event, ui ) {				$( this )					.addClass( "ui-state-highlight" )					.find( "p" )						.html( "Dropped!" );			}		});	});
});
  $(function() {	$( "#tabs" ).tabs();});</script> 