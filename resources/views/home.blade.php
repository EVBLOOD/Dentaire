@extends('layouts.app')

@section('content')
    <div class="body">
        @include('header')
        <div role="main" class="main">

            <section class="page-header page-header-modern bg-color-light-scale-1 page-header-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 align-self-center p-static order-2 text-center">
                            <h1 class="font-weight-bold text-dark">{{ __('Dashboard') }}</h1>
                        </div>
                        <div class="col-md-12 align-self-center order-1">
                            <ul class="breadcrumb d-block text-center">
                                <li><a href="#">Home</a></li>
                                <li class="active">{{ __('Dashboard') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            {{-- <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('Dashboard') }}</div>

                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                {{ __('You are logged in!') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            {{-- <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-6 text-right" style="margin-bottom: 30px;"></div>
                    <div class="col-12 col-sm-6 col-md-6 text-right" style="margin-bottom: 30px;"></div>
                </div>
                <div class="card" id="TableSorterCard">
                    <div class="card-header py-3">
                        <div class="row table-topper align-items-center">
                            <div class="col-12 col-sm-5 col-md-6 text-left" style="margin: 0px;padding: 5px 15px;">
                                <p class="text-primary m-0 font-weight-bold">Listes de rendez-vos</p>
                            </div>
                            <div class="col-12 col-sm-7 col-md-6 text-right" style="margin: 0px;padding: 5px 15px;">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-striped table tablesorter" id="ipi-table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th class="text-center">Nom</th>
                                            <th class="text-center">Prenom</th>
                                            <th class="text-center">Description</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Telephone</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <tr>
                                            <td>Ana</td>
                                            <td>Diseñador</td>
                                            <td>Diseño</td>
                                            <td>Diseño</td>
                                            <td>Diseño</td>
                                        </tr>
                                        <tr>
                                            <td>Fer<br></td>
                                            <td>Desarrollador</td>
                                            <td>Development</td>
                                            <td>Development</td>
                                            <td>Development</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-6 text-right" style="margin-bottom: 30px;"></div>
                    <div class="col-12 col-sm-6 col-md-6 text-right" style="margin-bottom: 30px;"></div>
                </div>
                <div class="card" id="TableSorterCard">
                    <div class="card-header py-3">
                        <div class="row table-topper align-items-center">
                            <div class="col-12 col-sm-5 col-md-6 text-left" style="margin: 0px;padding: 5px 15px;">
                                <p class="text-primary m-0 font-weight-bold">Listes de rendez-vos</p>
                            </div>
                            <div class="col-12 col-sm-7 col-md-6 text-right" style="margin: 0px;padding: 5px 15px;">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">

                                <table class="table table-striped table tablesorter" id="ipi-table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th class="text-center">Nom</th>
                                            <th class="text-center">Prénom</th>
                                            <th class="text-center">Description</th>
                                            <th class="text-center">time</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Téléphone</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <?php
                                        $cx = new PDO('mysql:host=localhost;port=3312;dbname=dentaire;charset=utf8', 'root',
                                        '');
                                        $return = $cx->query('select nom,prenom,description,time_rdv,email,tel from rdvs where date_rdv=CURDATE()');
                                        $i = 0;
                                        while ($tab = $return->fetch()) {
                                        $i++;
                                        if ($i % 2 == 0) { ?>
                                        <tr>
                                            <td><?php echo $tab['nom']; ?></td>
                                            <td><?php echo $tab['prenom']; ?></td>
                                            <td><?php echo $tab['description']; ?></td>
                                            <td><?php echo $tab['time_rdv']; ?></td>
                                            <td><?php echo $tab['email']; ?></td>
                                            <td><?php echo $tab['tel']; ?></td>
                                        </tr>
                                        <?php } else { ?>
                                        <tr>
                                            <td><?php echo $tab['nom']; ?></td>
                                            <td><?php echo $tab['prenom']; ?></td>
                                            <td><?php echo $tab['description']; ?></td>
                                            <td><?php echo $tab['time_rdv']; ?></td>
                                            <td><?php echo $tab['email']; ?></td>
                                            <td><?php echo $tab['tel']; ?></td>
                                        </tr>
                                        <?php }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        @include('footer')
    </div>
@endsection
