<?php /* Smarty version Smarty-3.1.14, created on 2013-09-19 13:27:26
         compiled from ".\templates\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31284521f49b718ad01-02565700%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1be7ff7fdee636597edd726ee98dfef4bfd55d1f' => 
    array (
      0 => '.\\templates\\footer.tpl',
      1 => 1379586440,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31284521f49b718ad01-02565700',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_521f49b718f895_81834533',
  'variables' => 
  array (
    'message' => 0,
    'total_company' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521f49b718f895_81834533')) {function content_521f49b718f895_81834533($_smarty_tpl) {?>    <!-- start footer -->
            <script>
            var message = '<?php echo $_smarty_tpl->tpl_vars['message']->value;?>
';
            if (message != '') {
                alert(message);
            }
            </script>
    <footer>
        <div class="wrap">
            <p>(с) Hast.ru 2010  -  Самый большой каталог компаний и предприятий Одессы</p>
            <p>Всего фирм: <?php echo $_smarty_tpl->tpl_vars['total_company']->value;?>
</p>
        </div>
    </footer>
    <!-- end footer -->
</body>
</html><?php }} ?>