<?php use_stylesheet('network.css') ?>
<?php use_helper('Text') ?>
<?php slot( 'pagetitle', 'Spark - Showing Network: '.$network->getTitle()  )?>
<div id="network"> <h3><?php echo __('Details') ?></h3>
  <?php if ($network->getLogo()): ?>    <div class="logo">      <a href="<?php echo $network->getUrl() ?>">        <img src="/uploads/networks/<?php echo $job->getLogo() ?>"          alt="<?php echo $network->getClient() ?> logo" />      </a>    </div>  <?php endif; ?>   <div class="description">    <?php echo simple_format_text($network->getDescription()) ?>  </div>
  <div style="padding: 20px 0;">    <a href="<?php echo url_for('network/edit?id='.$network->getId()) ?>">      <?php echo __('Edit')?>    </a>  </div>
    <div class="tabsholder">
	<div id="tabs">		<ul>			<li><a href="#tabs-1"><?php echo __('Layout') ?></a></li>			<li><a href="#tabs-2"><?php echo __('Theme') ?></a></li>		</ul>
		<div id="tabs-1">			  <div id="network_layout">			  	<ul id="featurelist">			  		<li id="title" class="nonsortable">Title</li>			  		<li id="navigation" class="nonsortable">Navigation</li>			  	<?php foreach ( $features as $feature ): ?>			  		<li id="<?php echo $feature['Feature']['id']; ?>" class="sortable"><?php echo $feature['Feature']['title'] ?></li>			  	<?php endforeach; ?>			  		<li id="footer" class="nonsortable">Footer</li>			  	</ul>			  </div>		
		</div>
		<div id="tabs-2">				<h5><?php echo ('Current Theme')?> </h5>				<img src="<?php echo "http://".$_SERVER['SERVER_NAME'].$sf_request->getRelativeUrlRoot()."/themes/".$theme[0]['sfMultisiteThemeProfile']['sfMultisiteThemeThemeInfo']['theme_name']."/template.png" ?>">  		</div>
	</div>
</div> <script type="text/javascript">$(document).ready(  function()   {    $("#featurelist").sortable(    {       items: '.sortable',      update: function(event, ui)       {		var featureOrder = $(this).sortable('toArray').toString();		$.post('<?php echo url_for('@feature_reorder')?>', {featureOrder:featureOrder});      }          } );
    $( "#featurelist li.nonsortable" ).disableSelection();		$("#network_layout").droppable({			accept:".droppable", 			drop:function(ev, ui){				$({type:'POST',							dataType:'html',							data:'id=' + ui.draggable.attr('id'),							success:function(data, textStatus){								$('#featurelist').html(data);								},							beforeSend:function(XMLHttpRequest){								$('#cartindicator').fadeIn('normal'  );								},							complete:function(XMLHttpRequest, textStatus){								$('#cartindicator').fadeOut('normal'  );								},							url:'<?php echo url_for('@feature_additem') ?>'})}, 			hoverClass:"hoverclass"});});  $(function() {	$( "#tabs" ).tabs();});</script>