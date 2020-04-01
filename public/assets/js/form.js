$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    let dmdDatas = new FormData();
    let MONTANT_MIN = 3000;
    let PERIOD_MIN = 3;

    //Arrondir les valeurs
    function Mef(valeur){
        return valeur.toFixed(2);
    }

    function simuler(amount,duration,rate,type){
        var Rf = (rate / 1200);

        var P1 = amount * (Rf / ( 1 - ( 1 / ( Math.pow ( ( 1 + Rf ), duration ) ) ) ) ) ;

        var Pf = Math.floor ( ( P1 + 0.005 ) * 100) / 100;

        $('#sim_type').html(type);
        $('#sim_amount').html(amount);
        $('#sim_duration').html(duration);
        $('#sim_rate').html(rate);
        $('#sim_payment').html(Pf);
        $('#sim_payments').html(Mef((Pf*duration)));
        $('#sim_rates').html(Mef((Pf*duration)-amount));

        dmdDatas.append('payment',Pf);
        dmdDatas.append('payments',Mef((Pf*duration)));
        dmdDatas.append('rates',Mef((Pf*duration)-amount));
    }

    function printCredit(amount,duration,rate){
        var Rf = (rate / 1200);

        var P1 = amount * (Rf / ( 1 - ( 1 / ( Math.pow ( ( 1 + Rf ), duration ) ) ) ) ) ;

        var Pf = Math.floor ( ( P1 + 0.005 ) * 100) / 100;

        var amortHTML='';

        amortHTML+='<div>';
            amortHTML+='<ul>';
                amortHTML+='<li>Montant : '+amount+'</li>';
                amortHTML+='<li>Durée : '+duration+'</li>';
                amortHTML+='<li>Taux : '+rate+'</li>';
                amortHTML+='<li>Mensualité du credit(euros) : '+Pf+'</li>';
                amortHTML+='<li>Total du crédit : '+Mef((Pf*duration))+'</li>';
                amortHTML+='<li>Total des intérêts : '+Mef((Pf*duration)-amount)+'</li>';
            amortHTML+='</ul>';
        amortHTML+='</div>';

        var Amort = new Array();//Amort[item,value]

        Amort[0,1] = amount;
        var Cp=0;
        var Ci=0;

        amortHTML+='<table border="1" cellpadding="3" style="border-collapse:collapse;border-spacing:0">';
        amortHTML+='<tr>';
            amortHTML+='<th>Mois</th>';
            amortHTML+='<th>Année</th>';
            amortHTML+='<th>Echéance</th>';
            amortHTML+='<th>Principal</th>';
            amortHTML+='<th>Intérêts</th>';
            amortHTML+='<th>Reste</th>';
            amortHTML+='<th>Par période</th>';
        amortHTML+='<tr>';

        for ( var I=1 ; I <= duration ; I++ ){
            Amort[I, 2] = Amort[I - 1, 1] * Rf;
            Amort[I, 2] = Math.floor((Amort[I, 2] + 0.005) * 100) / 100;
            Amort[I, 1] = Amort[I - 1, 1] - Pf + Amort[I, 2];
            Amort[I, 1] = Math.floor ( ( Amort[I, 1] + 0.005 ) * 100 ) / 100;
            var T1 = I - Math.floor ( ( I - 1 ) / 12 ) * 12;
            var T2 = 1 + Math.floor ( ( I - 1 ) / 12 );
            amortHTML+='<tr>';
            amortHTML+='<td>'+T1+'</td>';
            amortHTML+='<td>'+T2+'</td>';
            amortHTML+='<td>'+I+'</td>';
            amortHTML+='<td>'+Mef(Pf - Amort[I, 2])+'</td>';
            amortHTML+='<td>'+Mef(Amort[I,2])+'</td>';
            amortHTML+='<td>'+Mef(Amort[I,1])+'</td>';
            amortHTML+='<td>'+Mef(Pf * I)+'</td>';
            amortHTML+='</tr>';
            Cp = Cp + Pf - Amort[I, 2];
            Ci = Ci + Amort[I, 2];
        }
        Cp = Math.floor((Cp + 0.005) * 100) / 100;
        Ci = Math.floor((Ci + 0.005) * 100) / 100;
        amortHTML+='<tr>';
        amortHTML+='<td></td>';
        amortHTML+='<td></td>';
        amortHTML+='<td></td>';
        amortHTML+='<td>'+Mef(Cp)+'</td>';
        amortHTML+='<td>'+Mef(Ci)+'</td>';
        amortHTML+='<td></td>';
        amortHTML+='<td>'+Mef(Cp+Ci)+'</td>';
        amortHTML+='</tr>';
        amortHTML+='</table>';

        var mywindow = window.open('', 'PRINT', 'height=400,width=600');

        mywindow.document.write('<html><head><title>' + document.title  + '</title>');
        mywindow.document.write('</head><body >');
        mywindow.document.write('<h1>' + document.title  + '</h1>');
        mywindow.document.write(amortHTML);
        mywindow.document.write('</body></html>');
        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10*/
        mywindow.print();
        mywindow.close();
    }

    function isValidEmail(email) {
        if(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/.test(email)) {
            return true;
        }else{
            return false;
        }
    }

    $('#print').click(function(e){
        e.preventDefault();
        var amount = Number($('#amount').html());
        var duration = Number($('#duration').html());
        var rate = Number($('#rate').html());
        printCredit(amount,duration,rate);
    });

    $('.btn-demand').click(function (e) {
        e.preventDefault();

        var amount = $('#amount').val();
        var duration = $('#duration').val();
        var rate = 0.75;
        var type = '';

        switch ($('#type').val()) {
            case 'CRD001' :
                rate = 0.75;
                type='Crédit rapide';
                MONTANT_MIN = 3000;
                PERIOD_MIN = 3.18;
                break;
            case 'CRD002' :
                rate = 1.89;
                type='Crédit personnel';
                MONTANT_MIN = 10000;
                PERIOD_MIN = 1.89;
                break;
            case 'CRD003' :
                rate = 1.5;
                type='Crédit renouvelable';
                MONTANT_MIN = 3000;
                PERIOD_MIN = 3;
                break;
            default:
                rate = 0.75;
                type = 'Crédit général';
                MONTANT_MIN = 3000;
                PERIOD_MIN = 3;
                break;
        }

        if(amount < MONTANT_MIN){
            $('.cmderror').html('Montant trop minime');
            $('.cmderror').fadeIn();
            setTimeout(function () {$('.cmderror').fadeOut();},2000);
        }else{
            if(duration < PERIOD_MIN){
                $('.cmderror').html('Période trop minime');
                $('.cmderror').fadeIn();
                setTimeout(function () {$('.cmderror').fadeOut();},2000);
            }else{
                simuler(amount,duration,rate,type);
                $('.alert-info').fadeIn();
            }
        }

        dmdDatas.append('gender',$('#gender').val());
        dmdDatas.append('name',$('#name').val());
        dmdDatas.append('surname',$('#surname').val());
        dmdDatas.append('address',$('#address').val());
        dmdDatas.append('post_code',$('#post_code').val());
        dmdDatas.append('city',$('#city').val());
        dmdDatas.append('country',$('#pays').val());
        dmdDatas.append('phone',$('#phone').val());
        dmdDatas.append('email',$('#email').val());
        dmdDatas.append('type',type);
        dmdDatas.append('amount',amount);
        dmdDatas.append('duration',duration);
        dmdDatas.append('rate',rate);

        if(isValidEmail($('#email').val()) && ($('#email').val()!=='') && ($('#email').val()===$('#cemail').val())){
            $.ajax({
                type:'post',
                url:'/demand',
                data:dmdDatas,
                processData: false,
                contentType: false,
                dataType:'json',
                success:function(data){
                    if(data.success){
                        $('.cmdsuccess').html('Demande bien envoyée');
                        $('.cmdsuccess').fadeIn();
                        setTimeout(function () {$('.form-demand')[0].reset();},2000);
                    }else{
                        console.log(data);
                    }
                },
                error: function (data) {
                    console.log(data);
                }
            });
        }else{
            $('.cmderror').fadeIn();
            $('.cmderror').html('Coordonnées mal renseignés');
            setTimeout(function () {$('.cmderror').fadeOut();},2000);
        }
    });

    $('.btn-contact').click(function (e) {
        e.preventDefault();
        var Datas = new FormData();
        Datas.append('name',$('#contact-name').val());
        Datas.append('mail',$('#contact-email').val());
        Datas.append('subject',$('#contact-subject').val());
        Datas.append('message',$('#contact-message').val());
        if(isValidEmail($('#contact-email').val()) && ($('#contact-subject').val()!=='') && ($('#contact-name').val()!=='') && ($('#contact-message').val()!=='') ){
            $.ajax({
                type:'post',
                url:'/contact',
                data:Datas,
                processData: false,
                contentType: false,
                dataType:'json',
                success:function(data){
                    if(data.success){
                        $('.sendmessage').fadeIn();
                        setTimeout(function () {$('.form-contact')[0].reset();},2000);
                    }else{
                        $('.errormessage').fadeIn();
                        setTimeout(function () {$('.errormessage').fadeOut();},2000);
                    }
                },
                error: function (data) {
                    console.log(data);
                }
            });
        }else{
            $('.errormessage').fadeIn();
            setTimeout(function () {$('.errormessage').fadeOut();},2000);
        }
    });
});
