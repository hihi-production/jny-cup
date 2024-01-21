@extends('layouts.client.base')

@section('additional-css')
    <style scoped>
        .table {
            --bs-table-color: #E0F46E;
            --bs-table-bg: transparent !important;
            --bs-table-accent-bg: transparent;
            width: 100%;
            border-color: #E0F46E;
        }

        .nav-link {
            color: #bcf352 !important;
        }

        .nav-link.active {
            background-color: #bcf352 !important;
            color: #333 !important;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="py-5" style="color: #E0F46E">

            <h1 class="text-capitalize pb-5">
                <a href="{{ route('schedule') }}" style="color: #E0F46E" class="text-decoration-none">
                    <i class="fa-solid fa-arrow-left-long"></i>
                    &nbsp; fencing schedule
                </a>
            </h1>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Time</th>
                            <th scope="col">Venue</th>
                            <th scope="col">Agenda</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>07:00 - 08:00</td>
                            <td>MPSH</td>
                            <td>Weapon check and reporting</td>
                        </tr>
                        <tr>
                            <td>08:00 - 08:05</td>
                            <td>MPSH</td>
                            <td>Opening</td>
                        </tr>
                        <tr>
                            <td>08:06 - finish</td>
                            <td>MPSH</td>
                            <td>U14 Preliminary until Final Round and Awarding</td>
                        </tr>
                        <tr>
                            <td>13:00 - finish</td>
                            <td>MPSH</td>
                            <td>U17 Preliminary until Final Round and Awarding</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

        <div style="color: #E0F46E">
            <h3>
                Rules and Regulations
            </h3>
            <br>

            <ul>
                <li>For Male/Female Under 14: Participants must not be older than 14 years of age by the 1st of January 2024 (born in 2009 and after).</li>
                <li>For Male/Female Under 17: Participants must not be older than 17 year of age by the 1st of January 2024 (born in 2006 and after)</li>
                <li>The minimum number of participants per category is 5. If this number is not met, the respective category will be cancelled.</li>
                <li>Please note that the coach or representative from each school must report to the DT for re-registration at the start of the competition. During the re-registration, the coach or a representative from each school is required to confirm the entries for the school for all categories.</li>
                <li>The fencing competition shall be conducted in accordance with the current Statutes and Rules of the FIE. The Directoire de Technique shall deal with any unforeseen incidents not covered by the Rules.</li>
                <li>It is compulsory for all competitors to wear plastrons, fencing suits, masks and long socks (that reaches the knees). It is also compulsory for girls to wear chest protectors. All Foil fencers are required to wear a Mask with a conductive bib</li>
                <li>Competitors found wearing attire not conforming to the above will not be allowed to fence. Competitors are also reminded to bring a spare weapon and a spare body wire to be put at the side of the piste during their bouts.</li>
                <li>The Directoire de Technique shall be responsible for the technical organisation of the competition.</li>
                <li>All decisions are final and binding.</li>
            </ul>
        </div>
    </div>
@endsection
