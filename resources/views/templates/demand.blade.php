@extends('templates.mail')

@section('content')

    <div align="left" style="text-align:justify;margin:0 0 10px 0;padding:0;">
        <font face="Helvetica,Arial,sans-serif" size="2" color="#222222">
            <li style="font-size:15px;">Civilité : <strong id="gender">{{$data['gender']}}</strong></li>
            <li style="font-size:15px;">Nom : <strong id="surname">{{$data['surname']}}</strong></li>
            <li style="font-size:15px;">Prenom : <strong id="name">{{$data['name']}}</strong></li>
            <li style="font-size:15px;">Pays : <strong id="country">{{$data['country']}}</strong></li>
            <li style="font-size:15px;">Ville : <strong id="city">{{$data['city']}}</strong></li>
            <li style="font-size:15px;">Code Postal : <strong id="post_code">{{$data['post_code']}}</strong></li>
            <li style="font-size:15px;">Adresse : <strong id="address">{{$data['address']}}</strong></li>
            <li style="font-size:15px;">Email : <strong id="email">{{$data['email']}}</strong></li>
            <li style="font-size:15px;">Téléphone : <strong id="phone">{{$data['phone']}}</strong></li>
        </font>
    </div>
    <div align="left" style="text-align:justify;margin:0 0 10px 0;padding:0;">
        <font face="Helvetica,Arial,sans-serif" size="2" color="#222222">
            <p class="mb-4">Ci-dessous, les résultats de la simulation.</p>
            <ul class="list-unstyled ul-check primary recapitulatif">
                <li>Type de prêt : <strong id="type">{{$data['type']}}</strong> </li>
                <li>Montant emprunt (euros) : <strong id="amount">{{$data['amount']}}</strong></li>
                <li>Duree d'emprunt(mois) : <strong id="duration">{{$data['duration']}}</strong></li>
                <li>TAEG négociable(%) : <strong id="rate">{{$data['rate']}}</strong></li>
                <li>Mensualité du credit(euros) : <strong id="payment">{{$data['payment']}}</strong></li>
                <li>Total du credit(euros) : <strong id="payments">{{$data['payments']}}</strong></li>
                <li>Total des intérêts (euros) : <strong id="rates">{{$data['rates']}}</strong></li>
            </ul>
        </font>
    </div>
@endsection
