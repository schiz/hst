<?php /* Smarty version Smarty-3.1.14, created on 2013-09-23 10:07:05
         compiled from "./templates/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20892216345238578c6bbc89-25479114%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a4f6f0d327fc7bc3ea86f63906a1bf934ca50c7' => 
    array (
      0 => './templates/footer.tpl',
      1 => 1379945203,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20892216345238578c6bbc89-25479114',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5238578c6c53e2_28670075',
  'variables' => 
  array (
    'message' => 0,
    'total_company' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5238578c6c53e2_28670075')) {function content_5238578c6c53e2_28670075($_smarty_tpl) {?>    <!-- start footer -->
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