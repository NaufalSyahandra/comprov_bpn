<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Vite CSS -->
    @vite('resources/css/app.css')

    <!-- Google Charts Library -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <!-- FullCalendar CSS & JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>

    <script type="text/javascript">
        // Load Google Charts
        google.charts.load('current', {'packages': ['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Status', 'Jumlah'],
                ['Berkas Selesai', {{ $totalBerkasSelesai }}],
                ['Berkas Pending', {{ $totalBerkasPending }}],
                ['Pengaduan', {{ $totalPengaduan }}],
            ]);

            var options = {
                title: 'Statistik Berkas dan Pengaduan',
                pieHole: 0.4,
                width: '100%',
                height: '100%',
                legend: {position: 'top'},
                pieSliceText: 'value'
            };

            var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }

        $(document).ready(function () {
            // Initialize FullCalendar
            $('#calendar').fullCalendar({
                defaultView: 'month',
                height: 191,
                contentHeight: 191,
                events: [
                    {
                        title: 'Berkas Selesai',
                        start: '2025-01-15'
                    },
                    {
                        title: 'Pengaduan Baru',
                        start: '2025-01-20'
                    }
                ]
            });

            // Event submission for adding events to calendar
            $('#add-event-form').on('submit', function (event) {
                event.preventDefault();

                var title = $('#event-title').val();
                var date = $('#event-date').val();
                var description = $('#event-description').val();

                if (title && date) {
                    $('#calendar').fullCalendar('renderEvent', {
                        title: title,
                        start: date,
                        description: description
                    });

                    // Clear input fields
                    $('#event-title').val('');
                    $('#event-date').val('');
                    $('#event-description').val('');
                    alert('Event added successfully!');
                } else {
                    alert('Please fill in both title and date.');
                }
            });
        });
    </script>
</head>

<body class="bg-gray-100">

<!-- Sidebar -->
<div class="flex min-h-screen">
    @include('admin.sidebar')

    <!-- Main Content -->
    <div class="flex-1 bg-gray-100 ml-64">
        <!-- Header -->
        <header class="bg-white shadow px-6 py-4 flex items-center justify-between">
            <h1 class="text-2xl font-semibold text-gray-700">Dashboard</h1>
        </header>

        <!-- Content -->
        <main class="p-6">
            <!-- Cards Section (Total Pengaduan, Berkas, etc.) -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                <!-- Card Total Pengaduan -->
                <div class="bg-white p-4 rounded-lg shadow">
                    <h2 class="text-lg font-semibold text-gray-700">Total Pengaduan</h2>
                    <p class="text-3xl font-bold text-blue-600">{{ $totalPengaduan }}</p>
                </div>

                <!-- Card Total Berkas -->
                <div class="bg-white p-4 rounded-lg shadow">
                    <h2 class="text-lg font-semibold text-gray-700">Total Berkas</h2>
                    <p class="text-3xl font-bold text-blue-600">{{ $totalBerkas }}</p>
                </div>

                <!-- Card Berkas Selesai -->
                <div class="bg-white p-4 rounded-lg shadow">
                    <h2 class="text-lg font-semibold text-gray-700">Berkas Selesai</h2>
                    <p class="text-3xl font-bold text-green-600">{{ $totalBerkasSelesai }}</p>
                </div>

                <!-- Card Berkas Pending -->
                <div class="bg-white p-4 rounded-lg shadow">
                    <h2 class="text-lg font-semibold text-gray-700">Berkas Pending</h2>
                    <p class="text-3xl font-bold text-red-600">{{ $totalBerkasPending }}</p>
                </div>
            </div>

            <!-- Charts and Calendar Section -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <!-- Grafik Statistik -->
                <div class="bg-white p-4 rounded-lg shadow">
                    <h2 class="text-lg font-semibold mb-4">Grafik Statistik</h2>
                    <div id="chart_div" class="w-full" style="height: 250px;"></div>
                </div>

                <!-- Kalender -->
                <div class="bg-white p-4 rounded-lg shadow">
                    <h2 class="text-lg font-semibold mb-4">Kalender</h2>
                    <div id="calendar" class="w-full" style="height: 250px;"></div>
                </div>
            </div>

            <!-- Form for Adding Events -->
            <div class="bg-white p-6 rounded-lg shadow mt-6">
                <h2 class="text-xl font-bold mb-4">Tambah Kegiatan</h2>
                <form id="add-event-form" class="space-y-4">
                    <div>
                        <label for="event-title" class="block text-sm font-medium text-gray-700">Judul Kegiatan</label>
                        <input type="text" id="event-title"
                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div>
                        <label for="event-date" class="block text-sm font-medium text-gray-700">Tanggal Kegiatan</label>
                        <input type="date" id="event-date"
                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div>
                        <label for="event-description" class="block text-sm font-medium text-gray-700">Deskripsi
                            Kegiatan</label>
                        <textarea id="event-description" rows="3"
                                  class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"></textarea>
                    </div>
                    <button type="submit"
                            class="bg-blue-500 text-white font-semibold py-2 px-4 rounded hover:bg-blue-600 transition duration-300">
                        Tambah Kegiatan
                    </button>
                </form>
            </div>

            <!-- Notifikasi Pengaduan -->
            <div class="bg-white p-6 rounded-lg shadow mt-6">
                <h2 class="text-xl font-bold mb-4">Notifikasi Pengaduan</h2>
                <ul id="pengaduan-notif" class="space-y-4">
                    @foreach ($notifikasiPengaduan as $pengaduan)
                        <li class="py-3 px-4 border rounded-md bg-gray-50 shadow-sm">
                            <strong>{{ $pengaduan->nama_pengaduan }}</strong> - {{ $pengaduan->kategori }} <br>
                            <small class="text-gray-500">{{ $pengaduan->created_at->format('d M Y') }}</small>
                        </li>
                    @endforeach
                </ul>
            </div>
        </main>
    </div>
</div>
</body>

</html>
