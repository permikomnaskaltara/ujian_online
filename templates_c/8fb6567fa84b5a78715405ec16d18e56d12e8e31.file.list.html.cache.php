<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-01-03 13:47:36
         compiled from "..\templates\back-end\AdminLTE-2.3.6\subkelas\list.html" */ ?>
<?php /*%%SmartyHeaderCode:63315a4c7c8824de85-03337607%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8fb6567fa84b5a78715405ec16d18e56d12e8e31' => 
    array (
      0 => '..\\templates\\back-end\\AdminLTE-2.3.6\\subkelas\\list.html',
      1 => 1514961502,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63315a4c7c8824de85-03337607',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'sub_title' => 0,
    'adminweburl' => 0,
    'kelas' => 0,
    'query' => 0,
    'array_akses' => 0,
    'listdetail' => 0,
    'entry' => 0,
    'limitpage' => 0,
    'currentpage' => 0,
    'no' => 0,
    'totalpage' => 0,
    'frompage' => 0,
    'untilpage' => 0,
    'item' => 0,
    'tpl_dir' => 0,
    'homeurl' => 0,
    'alert_success' => 0,
    'alert_error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a4c7c884664d8_63722372',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4c7c884664d8_63722372')) {function content_5a4c7c884664d8_63722372($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/side.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 <small><?php echo $_smarty_tpl->tpl_vars['sub_title']->value;?>
</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
">Home</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/kelas/">Kelas</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/subkelas/"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a></li>
                    <li class="active"><?php echo $_smarty_tpl->tpl_vars['sub_title']->value;?>
</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">      
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            
                            <!-- /.box-header -->
                            <div class="box-body">
                                  <div class="row">

                                    <div class="col-md-12">
                                        <div id="alert_success" class="form-group" style="display: none;">                         
                                            <div class="alert alert-info">&nbsp;</div>
                                        </div>

                                        <div id="alert_error" class="form-group" style="display: none;">                         
                                            <div class="alert alert-danger">&nbsp;</div>
                                        </div>

                                        <div id="form-group">
                                            <table class="table table-striped table-bordered">
                                                <tr>
                                                    <td><label for="sekolah">Sekolah:</label></td>
                                                    <td>
                                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['kelas']->value['nama_sekolah'];?>
" class="form-control" name="nama_sekolah" readonly="readOnly" />
                                                    </td>
                                                </tr>
                                                
                                                <tr>
                                                    <td><label for="jurusan">Jurusan:</label></td>
                                                    <td>
                                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['kelas']->value['nama_jurusan'];?>
" class="form-control" name="nama_jurusan" readonly="readOnly" />
                                                    </td>
                                                </tr>
                                                
                                                <tr>
                                                    <td><label for="subjurusan">Sub Jurusan:</label></td>
                                                    <td>
                                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['kelas']->value['nama_subjurusan'];?>
" class="form-control" name="nama_subjurusan" readonly="readOnly" />
                                                    </td>
                                                </tr>
                                                
                                                <tr>
                                                    <td><label for="kelas">Kelas:</label></td>
                                                    <td>
                                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['kelas']->value['nama_kelas'];?>
" class="form-control" name="nama_kelas" readonly="readOnly" />
                                                    </td>
                                                </tr>
                                                
                                                <tr>
                                                    <td><label for="keyword">Pencarian:</label></td>
                                                    <td>
                                                        <div class="input-group">
                                                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['query']->value;?>
" class="form-control" name="query" id="query" placeholder="Masukan kata kunci pencarian..." />
                                                            <span class="input-group-btn"><div id="btn_cari" type="submit" class="btn btn-default">Cari</div>
                                                            <a class="btn btn-default" href="list.php">Reset</a></span>                                                  
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        
                                        <div class="form-group"></div>
                                        
                                        <div class="form-group">
                                            <?php if (in_array('T',$_smarty_tpl->tpl_vars['array_akses']->value)) {?><div id='btn_add' class="btn btn-primary">Baru</div><?php }?>
                                            <?php if (in_array('E',$_smarty_tpl->tpl_vars['array_akses']->value)) {?><div id='btn_edit' class="btn btn-success disabled">Edit</div><?php }?>
                                            <?php if (in_array('H',$_smarty_tpl->tpl_vars['array_akses']->value)) {?><div id='btn_delete' class="btn btn-danger disabled">Hapus</div><?php }?>
                                        
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['adminweburl']->value;?>
/kelas" class="btn btn-primary pull-right">Kembali ke Kelas</a>
                                        </div>
                                                
                                        <?php if (count($_smarty_tpl->tpl_vars['listdetail']->value)>0) {?>
                                            <div id="detail" class="table-responsive">
                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th width="5px"><div style="text-align: center;"><input type="checkbox" id="select_all" /></div></th>
                                                            <th width="10%"><div style="text-align: center;">No.</div></th>            
                                                            <th width="30%"><div style="text-align: center;">Kode Sub Kelas</div></th>
                                                            <th width="60%"><div style="text-align: left;">Nama Sub Kelas</div></th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable(1, null, 0);?>
                                                        <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listdetail']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>                                    
                                                            <tr id="baris_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
">
                                                                <td align="center"><input type="checkbox" id_select="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" name="select_<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" class="select" /></td>
                                                                <td align="center"><?php echo $_smarty_tpl->tpl_vars['limitpage']->value*($_smarty_tpl->tpl_vars['currentpage']->value-1)+$_smarty_tpl->tpl_vars['no']->value;?>
</td>
                                                                <td align="center"><?php echo $_smarty_tpl->tpl_vars['entry']->value['kode'];?>
</td>
                                                                <td align="left"><?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>
</td>                                                  
                                                            </tr>
                                                            <?php $_smarty_tpl->tpl_vars["no"] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>  
                                                        <?php } ?>
                                                    </tbody>
                                                </table>        
                                            </div>

                                            <?php if ($_smarty_tpl->tpl_vars['totalpage']->value>1) {?>
                                                <div class="form-group text-center">
                                                    <?php if ($_smarty_tpl->tpl_vars['currentpage']->value>1) {?>                                
                                                        <a class="btn btn-default" href="list.php?id_kelas=<?php echo $_smarty_tpl->tpl_vars['kelas']->value['id'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value-1;
if ($_smarty_tpl->tpl_vars['query']->value!='') {?>&query=<?php echo $_smarty_tpl->tpl_vars['query']->value;
}?>">&larr; Prev</a>
                                                    <?php }?>
                                                    <?php $_smarty_tpl->tpl_vars["item"] = new Smarty_variable($_smarty_tpl->tpl_vars['frompage']->value, null, 0);?>
                                                    <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['untilpage']->value+1 - ($_smarty_tpl->tpl_vars['frompage']->value) : $_smarty_tpl->tpl_vars['frompage']->value-($_smarty_tpl->tpl_vars['untilpage']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = $_smarty_tpl->tpl_vars['frompage']->value, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                                                        <?php if ($_smarty_tpl->tpl_vars['item']->value==$_smarty_tpl->tpl_vars['currentpage']->value) {?>
                                                            <span class="btn btn-info"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</span>                                
                                                        <?php } else { ?>
                                                            <a class="btn btn-default" href="list.php?id_kelas=<?php echo $_smarty_tpl->tpl_vars['kelas']->value['id'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['item']->value;
if ($_smarty_tpl->tpl_vars['query']->value!='') {?>&query=<?php echo $_smarty_tpl->tpl_vars['query']->value;
}?>"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a>
                                                        <?php }?>
                                                        <?php $_smarty_tpl->tpl_vars["item"] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value+1, null, 0);?>                                
                                                    <?php }} ?>
                                                    <?php if ($_smarty_tpl->tpl_vars['totalpage']->value>$_smarty_tpl->tpl_vars['currentpage']->value) {?>                                
                                                        <a class="btn btn-default" href="list.php?id_kelas=<?php echo $_smarty_tpl->tpl_vars['kelas']->value['id'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value+1;
if ($_smarty_tpl->tpl_vars['query']->value!='') {?>&query=<?php echo $_smarty_tpl->tpl_vars['query']->value;
}?>">Next &rarr;</a>
                                                    <?php }?>                                
                                                </div>
                                            <?php }?>
                                        <?php }?>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- ./box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
              
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['include_tpl']->value)."/includes/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

                  
    </div>
    <!-- ./wrapper -->
        
    <!-- jQuery 2.2.3 -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/plugins/jQuery/jquery-2.2.3.min.js"><?php echo '</script'; ?>
>
    <!-- Bootstrap 3.3.6 -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <!-- FastClick -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/plugins/fastclick/fastclick.js"><?php echo '</script'; ?>
>
    <!-- AdminLTE App -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/js/app.min.js"><?php echo '</script'; ?>
>
    <!-- Sparkline -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/plugins/sparkline/jquery.sparkline.min.js"><?php echo '</script'; ?>
>
    <!-- jvectormap -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"><?php echo '</script'; ?>
>
    <!-- SlimScroll 1.3.0 -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/plugins/slimScroll/jquery.slimscroll.min.js"><?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
 type="text/javascript">
        var home_url = '<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
';
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/js/notifikasi.js"><?php echo '</script'; ?>
>
    
    <!-- ChartJS 1.0.1 -->
    <!-- script src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/plugins/chartjs/Chart.min.js"><?php echo '</script'; ?>
 -->
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!-- script src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/js/pages/dashboard2.js"><?php echo '</script'; ?>
 -->
    
    <!-- AdminLTE for demo purposes -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/js/demo.js"><?php echo '</script'; ?>
>
    
    <!-- jQuery Ui -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/js/jquery-ui/jquery-ui-1.10.3.custom.min.js"><?php echo '</script'; ?>
>
    
    <!-- LOAD MASKING -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/css/loadmask.css" rel="stylesheet" />
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/dist/js/jquery.loadmask.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/blitzer/jquery-ui.css" type="text/css" />
    <?php echo '<script'; ?>
 type="text/javascript">
        $(function () {
            var delete_selected = "";
            
            $( "#btn_add" ).click(function() {
                window.location='add.php?id_kelas=<?php echo $_smarty_tpl->tpl_vars['kelas']->value['id'];?>
';
            });
            
            $( "#btn_edit" ).click(function() {
                window.location='edit.php?id='+delete_selected;
            });
            
            $( "#btn_delete" ).click(function() {
                prosesDelete(delete_selected);
            });
            
            $( "#btn_cari" ).click(function() {
                var query = $( "#query" ).val();
                window.location='list.php?id_kelas=<?php echo $_smarty_tpl->tpl_vars['kelas']->value['id'];?>
&'+(query.length>0?'&query='+query:'');
            });

            $( ".hapus" ).click(function() {                
                var id = this.getAttribute('id_select');
                prosesDelete(id);                
            });

            $( ".edit" ).click(function() {
                var id = this.getAttribute('id_select');
                window.location='edit.php?id='+id;
            });
            
            $( "#select_all" ).change(function() {
                var is_checked = $( "#select_all" ).is(':checked');

                var element = $( ".select" );
                var lengh = element.size();
                
                delete_selected = '';
                for(var i=0; i<lengh; i++) {
                    var id = element[i].getAttribute('id_select');
                    var nama = element[i].getAttribute('name');
                
                    $('[name='+nama+']').prop('checked', is_checked);                    
                    if(is_checked) delete_selected+=(delete_selected==''?'':',')+(is_checked?id:"");
                }
                
                setButton();
            });
            
            $( ".select" ).change(function() {
                var id = this.getAttribute('id_select');
                var nama = this.getAttribute('name');
                var is_checked = $( '[name='+nama+']').is(':checked');
        
                var temps = delete_selected.split(',');
                delete_selected='';
                for(var key in temps) {
                    if(temps[key]!=id) delete_selected+=(delete_selected.length>0?",":"")+temps[key];
                }
                delete_selected+=(delete_selected.length>0?",":"")+(is_checked?id:""); 
                
                setButton();
            });
            
            function setButton() {
                var temp = new Array();
                if(delete_selected.length>0) temp = delete_selected.split(',');                
                $( "#btn_edit" ).removeClass('disabled').addClass(temp.length==1?'':'disabled');
                $( "#btn_delete" ).removeClass('disabled').addClass(temp.length>0?'':'disabled');
            }
            
            function setMessage(type, message) {
                $('#alert_'+type+' .alert').text(message);
                $('#alert_'+type).show('slow');
                setTimeout(function() {
                    $('#alert_'+type).hide('slow');
                }, 5000);
                $("body, html").animate({ 
                    scrollTop: $('body').offset().top 
                }, 600);
            }

            function prosesDelete(id) {
                $('<div></div>').appendTo('body')
                .html('<div>Yakin ingin menghapus data?</div>')
                .dialog({
                    modal: true,
                    title: 'Konfirmasi Penghapusan',
                    zIndex: 10000,
                    autoOpen: true,
                    width: 'auto',
                    resizable: false,
                    buttons: {
                        Yes: function () {
                            $('#detail').mask('Hapus...');
                            $.ajax({
                                url: 'delete.php',
                                type: 'POST',
                                dataType: 'json',
                                data: { id: id },
                                success: function(data, textStatus, jqXHR) {
                                    if(data['success']) {
                                        window.location='list.php?id_kelas=<?php echo $_smarty_tpl->tpl_vars['kelas']->value['id'];
if ($_smarty_tpl->tpl_vars['query']->value!='') {?>&query=<?php echo $_smarty_tpl->tpl_vars['query']->value;
}?>';
                                    } else {
                                        $('#detail').unmask();
                                        setMessage('error', data['message']);
                                    }
                                },
                                error: function(jqXHR, textStatus, errorThrown) {
                                    $('#detail').unmask();
                                    setMessage('error', 'Terjadi kesalahan system.');
                                }
                            });                                
                            $(this).dialog("close");
                        },
                        No: function () {
                            //doFunctionForNo();
                            $(this).dialog("close");
                        }
                    },
                    close: function (event, ui) {
                        $(this).remove();
                    }
                });                
            }
            
            <?php if ($_smarty_tpl->tpl_vars['alert_success']->value!='') {?>setMessage('success', '<?php echo $_smarty_tpl->tpl_vars['alert_success']->value;?>
');<?php }?>        
            <?php if ($_smarty_tpl->tpl_vars['alert_error']->value!='') {?>setMessage('error', '<?php echo $_smarty_tpl->tpl_vars['alert_error']->value;?>
');<?php }?> 
        });
    <?php echo '</script'; ?>
>
</body>

</html>
<?php }} ?>
