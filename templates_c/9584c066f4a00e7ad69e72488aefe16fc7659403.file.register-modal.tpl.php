<?php /* Smarty version Smarty-3.1.14, created on 2013-09-03 15:08:33
         compiled from ".\templates\register-modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:151885220783533ec46-42126466%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9584c066f4a00e7ad69e72488aefe16fc7659403' => 
    array (
      0 => '.\\templates\\register-modal.tpl',
      1 => 1378210112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151885220783533ec46-42126466',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52207835344624_95021991',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52207835344624_95021991')) {function content_52207835344624_95021991($_smarty_tpl) {?><!-- start modal -->

        <div class="md-modal md-effect-19" id="modal-1">
            <div class="md-content">
                <h2>Выберете изображение логотипа</h2>
                <div><!-- <span class="choose-file">файл не выбран</span> -->
                   <button>
                    <div id="dropzone">
                        <!-- <form action="<?php echo $_SERVER['REQUEST_URI'];?>
" class="dropzone dz-clickable" id="demo-upload"> -->
                        <form enctype="multipart/form-data" action="<?php echo $_SERVER['REQUEST_URI'];?>
" method="POST" id="demo-upload">
                            <!-- <div class="dz-default dz-message"> -->
                            <div>
                            <span><input type="file" name="file" /></span>
                            </div>
                        </form>
                    </div>
                    </button> 
                
                    <span href="#" class="yellow-button">Добавить</span>
                    <button class="md-close">Закрыть!</button>

                </div>
            </div>
        </div>

        <div class="md-overlay"></div><!-- the overlay element -->

            <script src="js/classie.js"></script>
            <script src="js/modalEffects.js"></script>

    <!-- end modal --><?php }} ?>