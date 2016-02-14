<!-- start modal -->

        <div class="md-modal md-effect-19" id="modal-1">
            <div class="md-content">
                <h2>Выберете изображение логотипа</h2>
                <div><!-- <span class="choose-file">файл не выбран</span> -->
                   <button>
                    <div id="dropzone">
                        <!-- <form action="{$smarty.server.REQUEST_URI}" class="dropzone dz-clickable" id="demo-upload"> -->
                        <form enctype="multipart/form-data" action="{$smarty.server.REQUEST_URI}" method="POST" id="demo-upload">
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

    <!-- end modal -->