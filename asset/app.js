$(document).ready(function () {




    $('.savedata').click(function () {

        
        var name = $('#package').children("option:selected").val();
        var name_package = $('#name_package').val();
        var typepackage = $('#typepackage').children("option:selected").val();

        if (name != "" && name_package != "" && typepackage !="") {
            $.ajax({
                url: "insertpackge.php",
                method: "post",
                data: { name: name, name_package: name_package, typepackage:typepackage },
                success: function (data) {

                    window.location = "insert_namePackage.php";

                }

            });
        } else {
            alert("ห้ามเว้นว่างนะครับ\nกรุณาใส่ข้อมูลให้ครบถ้วน")
        }
    });

    $('.savedata1').click(function () {

        var nameService = $('#nameService').children("option:selected").val();
        var nameRouter = $('#nameRouter').val();
        var typeRouter = $('#typeRouter').val();

        if (nameService != "" && nameRouter != "" && typeRouter != "") {
            $.ajax({
                url: "insertrouter.php",
                method: "post",
                data: { nameService: nameService, nameRouter: nameRouter, typeRouter: typeRouter },
                success: function (data) {
                    window.location = "insert_namerouter.php";
                }
            });
        } else {

            alert("ห้ามเว้นว่างนะครับ\nกรุณาใส่ข้อมูลให้ครบถ้วน")
        }

    });

    $('.savedatadetail').click(function () {
        console.log('test');
        var nameService = $('#nameService').children("option:selected").val();
        var namePackage = $('#namePackage').children("option:selected").val();
        var download = $('#download').val();
        var upload = $('#upload').val();
        var data = $('#data').val();
        var call = $('#call').val();
        var sim = $('#sim').val();
        var cradit = $('#cradit').val();
        var call_phone = $('#call_phone').val();
        var network = $('#network').val();
        var router = $('#router').val();
        var detail = $('#detail').val();
        var pomotionDetail = $('#pomotionDetail').val();
        var contract = $('#contract').val();
        var discount = $('#discount').children("option:selected").val();
        var costInstall = $('#costInstall').val();
        var costRegister = $('#costRegister').val();
        var costEquipment = $('#costEquipment').val();
        var costMonth = $('#costMonth').val();
        var dateStart = $('#dateStart').val();
        var dateEnd = $('#dateEnd').val();

        if ((download != "") && (upload != "") && (costMonth != "")) {

            $.ajax({
                url: "insertdetail.php",
                method: "post",
                data: {
                    nameService: nameService,
                    namePackage: namePackage,
                    download: download,
                    upload: upload,
                    data: data,
                    call: call,
                    sim: sim,
                    cradit: cradit,
                    call_phone: call_phone,
                    network: network,
                    router: router,
                    detail: detail,
                    pomotionDetail: pomotionDetail,
                    contract: contract,
                    discount: discount,
                    costInstall: costInstall,
                    costRegister: costRegister,
                    costEquipment: costEquipment,
                    costMonth: costMonth,
                    dateStart: dateStart,
                    dateEnd: dateEnd

                },
                success: function (data) {
                    window.location = "viewdetailPackage.php";
                }
            });
           
        } else {
            alert('ห้ามเว้นว่างนะครับ\nอย่างน้อยจะต้องกรอก Download/Upload และ รายเดือน');
            

        }
    });

    $('.updatedetail').click(function () {

        console.log('testestestestestest');
        var id_log = $('#id_log').val();
        var nameService = $('#nameService').children("option:selected").val();
        var namePackage = $('#namePackage').children("option:selected").val();
        var download = $('#download').val();
        var upload = $('#upload').val();
        var data = $('#data').val();
        var call = $('#call').val();
        var sim = $('#sim').val();
        var cradit = $('#cradit').val();
        var call_phone = $('#call_phone').val();
        var network = $('#network').val();
        var router = $('#router').val();
        var detail = $('#detail').val();
        var pomotionDetail = $('#pomotionDetail').val();
        var contract = $('#contract').val();
        var discount = $('#discount').children("option:selected").val();
        var costInstall = $('#costInstall').val();
        var costRegister = $('#costRegister').val();
        var costEquipment = $('#costEquipment').val();
        var costMonth = $('#costMonth').val();
        var dateStart = $('#dateStart').val();
        var dateEnd = $('#dateEnd').val();

        /*console.log(id_log);
        console.log(nameService);
        console.log(namePackage);
        console.log(download);
        console.log(upload);
        console.log(data);
        console.log(call);
        console.log(sim);
        console.log(cradit);
        console.log(call_phone);
        console.log(network);
        console.log(router);
        console.log(detail);
        console.log(pomotionDetail);
        console.log(contract);
        console.log(discount);
        console.log(costInstall);
        console.log(costRegister);
        console.log(costEquipment);
        console.log(costMonth);
        console.log(dateStart);
        console.log(dateEnd);*/

        if (id_log != "" && nameService != "" && namePackage != "" && download != "" && upload != "") {

            $.ajax({
                url: "updatedetailpackage.php",
                method: "post",
                data: {
                    nameService: nameService,
                    namePackage: namePackage,
                    download: download,
                    upload: upload,
                    data: data,
                    call: call,
                    sim: sim,
                    cradit: cradit,
                    call_phone: call_phone,
                    network: network,
                    router: router,
                    detail: detail,
                    pomotionDetail: pomotionDetail,
                    contract: contract,
                    discount: discount,
                    costInstall: costInstall,
                    costRegister: costRegister,
                    costEquipment: costEquipment,
                    costMonth: costMonth,
                    dateStart: dateStart,
                    dateEnd: dateEnd,
                    id_log: id_log

                },
                success: function (data) {
                    window.location = "viewdetailPackage.php";
                }
            });

        } else {

            alert("ห้าวเว้นว่างนะครับ");
        }
    });

    $('.updatepk').click(function () {


        var id_pk = $('#id_pk').val();
        var service = $('#service').children("option:selected").val();
        var name_package = $('#name_package').val();
        var typepackage = $('#typepackage').children("option:selected").val();
        

        console.log(id_pk);
        console.log(service);
        console.log(name_package);
        console.log(typepackage);

        if (id_pk != "" && service != "" && name_package != "" ) {
            $.ajax({
                url: "updatenamepackage.php",
                method: "post",
                data: { id_pk: id_pk, service: service, name_package: name_package,typepackage:typepackage },
                success: function (data) {
                window.location = "insert_namePackage.php";
                }
            });

        } else {

            alert("ห้ามเว้นว่างนะครับ\nกรุณาใส่ข้อมูลให้ครบถ้วน")
        }
    });

    $('.updateNRT').click(function () {

        console.log("TEST");
        var id_router = $('#id_router').val();
        var nameService = $('#nameService').children("option:selected").val();
        var nameRouter = $('#nameRouter').val();
        var typeRouter = $('#typeRouter').children("option:selected").val();

        /*console.log(id_router);
        console.log(nameService);
        console.log(nameRouter);
        console.log(typeRouter);*/

        if (id_router != "" && nameService != "" && nameRouter != "" && typeRouter != "") {
            $.ajax({
                url: "updatenamerouter.php",
                method: "post",
                data: { id_router: id_router, nameService: nameService, nameRouter: nameRouter, typeRouter: typeRouter },
                success: function (data) {
                    window.location = "insert_namerouter.php";
                }
            });

        } else {

            alert("ห้ามเว้นว่างนะครับ\nกรุณาใส่ข้อมูลให้ครบถ้วน")
        }

    });

    $('.viewdetail').click(function () {
        var id = $(this).attr('id');

        $.ajax({
            url: "showdetail.php",
            method: "post",
            data: { id: id},
            success: function (data) {
                $('.showdetial').html(data)
            }
        });
    });


    $('.selectok').click(function () {
        console.log('TEST');
        var name_pack = $('#selectpackage').children("option:selected").val();
        //var id = $(this).attr('id');
        console.log(name_pack);

        $.ajax({
            url: "testshow.php",
            method: "post",
            data: { name_pack:name_pack},
            success: function (data) {
                $('.testshow').html(data)
            }
        });

        

    });

    $('.selectok2').click(function () {
        console.log('TEST');
        var name_pack = $('#selectpackage2').children("option:selected").val();
        //var id = $(this).attr('id');
        console.log(name_pack);

        $.ajax({
            url: "testshow2.php",
            method: "post",
            data: { name_pack:name_pack},
            success: function (data) {
                $('.testshow2').html(data)
            }
        });

        

    });


    $('.viewupdatepackage').click(function () {

        console.log("TEST");
        var id_pk = $('#id').val();
        console.log(id_pk);
        $.ajax({
            url: "update_namePackage.php",
            method: "post",
            data: { id_pk: id_pk },
            success: function (data) {
                window.location = "update_namePackage.php";
            }
        });

    });



    $('.deletepackage').click(function () {
        var id = $(this).attr('id');
         console.log("result : "+id); 
        $('.cfdeletepackage').click(function () {
            window.location.replace("deletepackage.php?id=" + id);
        });
    });

    $('.deleteupdatepackage').click(function () {

        console.log('TEST delete');
        var id = $(this).attr('id');
        console.log(id);
        $('.cfdeleteupdatepackage').click(function () {

            window.location.replace("deletepackage.php?id=" + id);

        });
    });

    $('.deleterouter').click(function () {

        var id = $(this).attr('id');
        console.log(id)
        $('.cfdeleterouter').click(function () {
            window.location.replace("deleterouter.php?id=" + id);
        });

    });

    $('.deletedetail').click(function () {

        console.log("test");
        var id = $(this).attr('id');
        console.log(id);

        $('.cf').click(function () {
            window.location.replace("deletedetail.php?id=" + id);
        });

    });


$('#nameService').change(function (){

    var id_service = $(this).val();
    if(id_service != ""){
        $.ajax({
            type:"post",
            url:"dropdownlist.php",
            data:{id_service:id_service},
            success:function(response){
                var resp = $.trim(response);
                $('#namePackage').html(resp);
            }
        });
    }else {
        $('#namePackage').html('<option>--select option--</option>');
    }

});


    
   

   $('#textnaja').DataTable( {
    
            

            dom: 'Bfrtip',
            buttons: [
            'pageLength', 'csv', 'excel', 'pdf',
            {extend: 'print' ,essageTop: 'This print was produced using the Print button for DataTables'}, 
            'colvis' ],
            "lengthMenu": [ [10, 25, -1], ['10','25', "All"] ,
               
           ]
           
    
            
        } );


 $('#textnaja555').DataTable( {
    /*aLengthMenu: [
        [10, 25],
        [10, 25]
    ],
      "pageLength": 10*/

      dom: 'Bfrtip',
            buttons: [
            'pageLength', 'csv', 'excel', 'pdf','print', 'colvis',],
            "lengthMenu": [ [10, 25, -1], ['10','25', "All"] ]
            
            
            

            
} );

    $('#data_table_router').DataTable({

        dom: 'Bfrtip',
            buttons: [
            'pageLength', 'csv', 'excel', 'pdf','print', 'colvis',],
            "lengthMenu": [ [10, 25, -1], ['10','25', "All"] ]



         });



    
    $('#viewdatapackageupdate').DataTable({

        aLengthMenu: [
            [10, 25],
            [10, 25]
        ],
          "pageLength": 10



         });
    

    $('#viewdatarouter').DataTable({

        aLengthMenu: [
            [10, 25],
            [10, 25]
        ],
          "pageLength": 10


         });

    $('#showpackage1').DataTable({

            aLengthMenu: [
    
                [1,3,5,7],
                [1,3,5,7]
            ],
    
              "pageLength": 3
    
             });
    


            $('#showpackage2').DataTable({

                aLengthMenu: [
        
                    [3,5,7],
                    [3,5,7]
                ],
        
                  "pageLength": 3
        
                 });
        
                });
               



    $('.view555').click(function () {

    console.log("test");
    var name_pack = $('#selectpackage555').children("option:selected").val();
    console.log("Result = " + name_pack);

    $.ajax({
        url: "testshow.php",
        method: "post",
        data: {  name_pack: name_pack },
        success: function (data) {
            window.location = "testshow.php";

        }
    });

});
            
               
