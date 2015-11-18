<?php
/**
 * OrangeHRM is a comprehensive Human Resource Management (HRM) System that captures
 * all the essential functionalities required for any enterprise.
 * Copyright (C) 2006 OrangeHRM Inc., http://www.orangehrm.com
 *
 * OrangeHRM is free software; you can redistribute it and/or modify it under the terms of
 * the GNU General Public License as published by the Free Software Foundation; either
 * version 2 of the License, or (at your option) any later version.
 *
 * OrangeHRM is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with this program;
 * if not, write to the Free Software Foundation, Inc., 51 Franklin Street, Fifth Floor,
 * Boston, MA  02110-1301, USA
 *
 */
?>

<?php 
use_stylesheet(plugin_web_path('orangehrmAdminPlugin', 'css/degreeSuccess')); 
use_javascript(plugin_web_path('orangehrmAdminPlugin', 'js/degreeSuccess')); 
?>

<?php echo isset($templateMessage) ? templateMessage($templateMessage) : ''; ?>

<div class="box" id="saveFormDiv">
    <div class="head">
            <h1 id="saveFormHeading">Add Degree</h1>
    </div>
    
    <div class="inner">

        <form name="frmSave" id="frmSave" method="post" action="<?php echo url_for('admin/degree'); ?>">
            
            <?php echo $form['_csrf_token']; ?>
            
            <?php echo $form['id']->render(); ?>
            
            <fieldset>
                
                <ol>
                    
                    <li>
                        <?php echo $form['code']->renderLabel(__('Code'). ' <em>*</em>'); ?>
                        <?php echo $form['code']->render(array("class" => "block default editable valid", "maxlength" => 10)); ?>
                    </li>
                    <li>
                        <?php echo $form['name']->renderLabel(__('Degree'). ' <em>*</em>'); ?>
                        <?php echo $form['name']->render(array("class" => "block default editable valid", "maxlength" => 100)); ?>
                    </li>
                    
                    <li class="required">
                        <em>*</em> <?php echo __(CommonMessages::REQUIRED_FIELD); ?>
                    </li>
                    
                </ol>
                
                <p>
                    <input type="button" class="addbutton" name="btnSave" id="btnSave" value="<?php echo __('Save'); ?>"/>
                    <input type="button" id="btnCancel" class="btn reset" value="<?php echo __('Cancel'); ?>" />
                </p>
                
            </fieldset>

        </form>
    
    </div>    
    
</div> <!-- saveFormDiv -->

<!-- Listi view -->

<div id="recordsListDiv" class="box miniList">
    <div class="head">
            <h1><?php echo __('Degree'); ?></h1>
    </div>
    <div class="inner">
        
        <?php include_partial('global/flash_messages'); ?>
        
        <form name="frmList" id="frmList" method="post" action="<?php echo url_for('admin/deleteDegree'); ?>">
            <?php echo $listForm ?>
            <p id="listActions">
                <input type="button" class="addbutton" id="btnAdd" value="<?php echo __('Add'); ?>"/>
                <input type="button" class="delete" id="btnDel" value="<?php echo __('Delete'); ?>"/>
            </p>
            
            <table class="table hover" id="recordsListTable">
                <thead>
                    <tr>
                        <th class="check" style="width:2%"><input type="checkbox" id="checkAll" class="checkboxAtch" /></th>
                        <th style="width:50%"><?php echo __('Name'); ?></th>
                         <th style="width:50%"><?php echo __('Code'); ?></th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php 
                    $row = 0;
                    $cssClass = ($row%2) ? 'even' : 'odd';
                    foreach($records as $record) : 
                        $cssClass = ($row%2) ? 'even' : 'odd';
                        $row++;
                    ?>
                    
                    <tr class="<?php echo $cssClass;?>">
                        <td class="check">
                            <input type="checkbox" class="checkboxAtch" name="chkListRecord[]" value="<?php echo $record->getId(); ?>" />
                        </td>
                        <td class="tdName tdValue">
                            <a href="#"><?php echo $record->getName(); ?></a>
                        </td>
                        <td class="tdCode tdValue">
                            <a href="#"><?php echo $record->getCode(); ?></a>
                        </td>
                    </tr>
                    
                    
                    
                    <?php endforeach; ?>
                    
                    <?php if (count($records) == 0) : ?>
                    <tr class="<?php echo 'even';?>">
                        <td>
                            <?php echo __(TopLevelMessages::NO_RECORDS_FOUND); ?>
                        </td>
                    </tr>
                    <?php endif; ?>
                    
                </tbody>
            </table>
        </form>
    </div>
</div> <!-- recordsListDiv -->    

<script type="text/javascript">
//<![CDATA[	    
 
    var recordsCount = <?php echo count($records);?>;
   
    var recordKeyId = "education_id";
   
    var saveFormFieldIds = new Array();
    saveFormFieldIds[0] = "degree_name";
    
    var urlForExistingNameCheck = '<?php echo url_for('admin/checkDegreeNameExistence'); ?>';
    
    var lang_addFormHeading = "<?php echo __('Add Degree'); ?>";
    var lang_editFormHeading = "<?php echo __('Edit Degree'); ?>";
    
    var lang_nameIsRequired = '<?php echo __(ValidationMessages::REQUIRED); ?>';
    var lang_nameExists = '<?php echo __(ValidationMessages::ALREADY_EXISTS); ?>';
    
//]]>	
</script> 