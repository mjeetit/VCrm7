<?php /* Smarty version Smarty-3.1.7, created on 2018-07-05 05:36:29
         compiled from "/opt/lampp/htdocs/vtigercrm/includes/runtime/../../layouts/v7/modules/Reports/partials/SidebarHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3305639805b3dae5d7b3f03-19112089%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '561b2f06196b8a431f94f1bc1ef726fbe1923747' => 
    array (
      0 => '/opt/lampp/htdocs/vtigercrm/includes/runtime/../../layouts/v7/modules/Reports/partials/SidebarHeader.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3305639805b3dae5d7b3f03-19112089',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SELECTED_MENU_CATEGORY' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5b3dae5d7c8f5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3dae5d7c8f5')) {function content_5b3dae5d7c8f5($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['APP_IMAGE_MAP'] = new Smarty_variable(Vtiger_MenuStructure_Model::getAppIcons(), null, 0);?>

<div class="col-sm-12 col-xs-12 app-indicator-icon-container app-<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
">
    <div class="row" title="<?php echo strtoupper(vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value));?>
">
        <span class="app-indicator-icon fa fa-bar-chart"></span>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/SidebarAppMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>