<table class="report">
	<tr align="left" class="report odd">	
		<td><?php echo __('Total users')?></td><td><?php echo $UserAnalysis['TotalActiveUsers']?></td>
	</tr>
	<tr class="report even">
		<td><?php echo __('Active users')?>(30d)</td><td><?php echo $UserAnalysis['ActiveUsers30d']?></td>
	</tr>
	<tr class="report odd">
		<td><?php echo __('Active users')?>(7d)</td><td><?php echo $UserAnalysis['ActiveUsers7d']?></td>
	</tr>
	<tr class="report even">
		<td><?php echo __('Active users')?>(48h)</td><td><?php echo $UserAnalysis['ActiveUsers48h']?></td>
	</tr>
	<tr class="report odd">
		<td><?php echo __('Active users')?>(24h)</td><td><?php echo $UserAnalysis['ActiveUsers24h']?></td>
	</tr>
</table>