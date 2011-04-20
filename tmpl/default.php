<?php
/**
* Admin Module to List Plugin Info for Joomla 1.5
* Author:  Jeremy Ford - jeremyfo@gmail.com
* Copyright 2011 jfo.me
* http://jfo.me
* License:  GNU General Public License
*
* File: default.php 
*/
defined( '_JEXEC' ) or die( 'Restricted access' );
$gfx = null;
?>

<table class="adminlist">
		<thead>
			<tr>
				<td class="title">
					<strong><?php echo 'id' ?></strong>
				</td>
				<td class="title">
					<strong><?php echo JText::_( 'Name' ); ?></strong>
				</td>
				<td class="title">
					<strong><?php echo JText::_( 'Element' ); ?></strong>
				</td>
				<td class="title">
					<strong><?php echo JText::_( 'Folder' ); ?></strong>
				</td>
				<td class="title"><center>
					<strong><?php echo JText::_( 'Published' ); ?></strong></center>
				</td>
			</tr>
		</thead>
<tbody>
<?php foreach($items as $items) {	?>
			<tr>
				<td width="5%">
					<?php echo $items->id; ?>
				</td>
				<td>
				     <a href="<?php echo $link . 'index.php?option=com_plugins&view=plugin&client=site&task=edit&cid[]=' . $items->id;?>"> <?php echo $items->name;?> </a>
				</td>
				<td>
					<?php echo $items->element; ?>
				</td>
				<td>
					<?php echo $items->folder; ?>
				</td>
				<td><center> 
				    <?php if($items->published) $gfx = "check.png"; else $gfx = "x.png";?>
		            <?php echo '<img src="' . $link . 'modules/mod_jfopluglist/tmpl/'. $gfx . '"/>';?>
		            </center>				    
				</td>
			</tr>
			<?php } ?>
		</tbody>
</table>
<table class="adminlist">
        <thead>
			<tr>
				<td class="title">
					<center><strong><?php echo JText::_( 'Total Plugins' ); ?></strong>
				</td>
				<td class="title">
					<strong><?php echo JText::_( 'Total Enabled' ); ?></strong>
				</td>
				<td class="title">
					<strong><?php echo JText::_( 'Total Disabled' ); ?></strong></center>
				</td>
			</tr>
		</thead>
		<tbody>
		    <tr>
		        <td>
		            <center><?php echo $total;?></center>
		        </td>
		        <td>
		            <center><?php echo $total_en;?></center>
		        </td>
		        <td>
		            <center><?php echo $total_dis;?></center>
		        </td>
		    </tr>
		</tbody>
</table>
<center><a href="http://jfo.me">jfo.me</a></center>
