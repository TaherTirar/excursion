@extends('layouts.base')

@section('content')
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="breadcrumb-wrap">
                    <h2>Mes Réservations</h2>
                    <ul class="breadcrumb-links">
                        <li>
                            <a href="{{ url('home') }}">Acceuil</a>
                            <i class="bx bx-chevron-right"></i>
                        </li>
                        <li>Mes Réservations</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="package-sidebar-wrapper pt-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @if(count($reservations) > 0)
                    <div class="row mb-30">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="package-filter">
                                <h5>Afficher {{ $reservations->firstItem() ?? 0 }}-{{ $reservations->lastItem() ?? 0 }} de {{ $reservations->total() }} réservations</h5>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        @foreach($reservations as $reservation)
                            <div class="col-lg-12 col-md-12 mb-4">
                                <div class="package-card-xl">
                                    <div class="package-details-xl">
                                        <div class="package-info">
                                            <h5><span>Réservation #{{ $reservation->id }}</span></h5>
                                            <h5><i class="flaticon-calendar"></i> {{ $reservation->created_at->format('d/m/Y') }}</h5>
                                        </div>
                                        <h3>
                                            <i class="flaticon-arrival"></i>
                                            <a href="{{ route('activity.show', ['id' => $reservation->service_id ?? 0]) }}">
                                                {{ $reservation->service->titre ?? 'Service non disponible' }}
                                            </a>
                                        </h3>
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <p><strong>Date:</strong> {{ $reservation->date_reservation ?? 'N/A' }}</p>
                                            </div>
                                            <div class="col-md-3">
                                                <p><strong>Personnes:</strong> {{ $reservation->nombre_personnes ?? 'N/A' }}</p>
                                            </div>
                                            <div class="col-md-3">
                                                <p><strong>Statut:</strong> {{ $reservation->status ?? 'En attente' }}</p>
                                            </div>
                                            <div class="col-md-3">
                                                <p><strong>Total:</strong> {{ $reservation->prix_total ?? 'N/A' }} €</p>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <a href="{{ route('reservation.edit', ['id' => $reservation->id]) }}" class="btn-sm btn-primary">Modifier</a>
                                                <form action="{{ route('reservation.delete', ['id' => $reservation->id]) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn-sm btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir annuler cette réservation?')">Annuler</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="pagination mt-30">
                                {{ $reservations->links('vendor.pagination.custom') }}
                            </div>
                        </div>
                    </div>
                @else
                    <div class="alert alert-info">
                        <p>Vous n'avez pas encore de réservations.</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
