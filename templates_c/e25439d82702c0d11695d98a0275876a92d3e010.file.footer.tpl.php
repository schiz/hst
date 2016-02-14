<?php /* Smarty version Smarty-3.1.14, created on 2013-09-19 11:58:31
         compiled from "..\templates\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18567523abcb7603411-81296100%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e25439d82702c0d11695d98a0275876a92d3e010' => 
    array (
      0 => '..\\templates\\footer.tpl',
      1 => 1379328174,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18567523abcb7603411-81296100',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
    'total_company' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_523abcb762b3e8_23574921',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523abcb762b3e8_23574921')) {function content_523abcb762b3e8_23574921($_smarty_tpl) {?>    <!-- start footer -->
            <script>
            var message = '<?php echo $_smarty_tpl->tpl_vars['message']->value;?>
';
            if (message != '') {
                alert(message);
            }
            </script>
    <footer>
        <div class="wrap">
            <ul class="counters">
                <li><a href="#"><img src="uploads/counter_01.png" alt="Counter" width="88" height="31"></a></li>
                <li><a href="#"><img src="uploads/counter_02.png" alt="Counter" width="88" height="31"></a></li>
            </ul>
            <p>(с) Hast.ru 2010  -  Самый большой каталог компаний и предприятий Одессы</p>
            <p>Всего фирм: <?php echo $_smarty_tpl->tpl_vars['total_company']->value;?>
</p>
        </div>
    </footer>
    <!-- end footer -->
</body>
</html><?php }} ?>