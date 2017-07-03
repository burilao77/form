
<div class="container">
      <h3>Registrar Producto</h3>

    <div class="row">
    <?= $this->Form->create($product) ?> 
        <div class="col-md-10">
                <div class="form-group">
                <label>Nombre Producto</label>
                <?= $this->Form->input('name', ['class' => 'form-control', 'placeholder' => 'ingrese el nombre', 'label' => false]) ?>
              </div>
              <div class="form-group">
                <label>Precio Producto</label>
                <?= $this->Form->input('price', ['class' => 'form-control', 'placeholder' => 'ingrese el precio', 'label' => false]) ?>
              </div>
              <div class="form-group">
                <label>Descripción Producto</label>
                <?= $this->Form->textarea('description', ['class' => 'form-control', 'placeholder' => 'ingrese una descripción', 'label' => false]) ?>
              </div>
              <!-- usando el datapicker de bootstrap-->
              
                    <div class="container">
                    <div class="col-md-5">
                    <label>Fecha de Elaboración</label>
                        <div class="form-group">
                            <div class='input-group date' id='date_elaboration'>
                                <?=
                                    $this->Form->input('date_elaboration', ['class' => 'form-control', 'placeholder' => 'fecha elaboración', 'label' => false, 'type' => 'text'])
                                ?>
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                   <div class="col-md-5">
                    <label>Fecha de Vencimiento</label>
                        <div class="form-group">
                            <div class='input-group date' id='date_expiration'>
                                <?=
                                    $this->Form->input('date_expiration', ['class' => 'form-control', 'placeholder' => 'fecha vencimiento', 'label' => false, 'type' => 'text'])
                                ?>
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <?= $this->Form->button('Registrar', ['class' => 'btn btn-success']) ?>
                    </div>
        </div>

              
        
      <?= $this->Form->end() ?>
    </div>

</div>

<script type="text/javascript">

    $(function () {
        $('#date_elaboration').datetimepicker({ 
            format: 'YYYY-MM-DD hh:mm:ss',
            locale: 'es'

        });
        $('#date_expiration').datetimepicker({ 
            useCurrent: false ,//Important! See issue #1075
            format: 'YYYY-MM-DD hh:mm:ss',
            locale: 'es'
        });
        $("#date_elaboration").on("dp.change", function (e) {
            $('#date_expiration').data("DateTimePicker").minDate(e.date);
        });
        $("#date_expiration").on("dp.change", function (e) {
            $('#date_elaboration').data("DateTimePicker").maxDate(e.date);
        });
    });
</script>


