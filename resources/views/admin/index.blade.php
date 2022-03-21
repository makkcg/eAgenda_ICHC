<x-admin.layouts.master>
    <x-slot name="styles">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    </x-slot>

    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $usersCount }}</h3>

                    <p>{{ __('admin.users') }}</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</x-admin.layouts.master>
