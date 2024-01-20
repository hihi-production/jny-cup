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
            <h1 class="text-capitalize">dance schedule</h1>

            <br>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Time</th>
                            <th scope="col">Venue</th>
                            <th scope="col">Event</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>14:30 - 14:45</td>
                            <td>MPSH</td>
                            <td>Registration and Welcome</td>
                        </tr>
                        <tr>
                            <td>14:45 - 15:00</td>
                            <td>MPSH</td>
                            <td>Opening Ceremony</td>
                        </tr>
                        <tr>
                            <td>15:00 - 15:20</td>
                            <td>MPSH</td>
                            <td>
                                Tunas Bangsa: (20 minutes) <br>
                                Each performance includes an introduction of each member of the group, the setup, dance routine (3-7 minutes), and short Q&A if applicable. The judges may also make comments and give feedback about the performances.
                            </td>
                        </tr>
                        <tr>
                            <td>15:20 - 15:40</td>
                            <td>MPSH</td>
                            <td>
                                SWA: (20 minutes) <br>
                                Each performance includes an introduction of each member of the group, the setup, dance routine (3-7 minutes), and short Q&A if applicable. The judges may also make comments and give feedback about the performances.
                            </td>
                        </tr>
                        <tr>
                            <td>15:40 - 16:00</td>
                            <td>MPSH</td>
                            <td>
                                IPEKA BSD: (20 minutes) <br>
                                Each performance includes an introduction of each member of the group, the setup, dance routine (3-7 minutes), and short Q&A if applicable. The judges may also make comments and give feedback about the performances.
                            </td>
                        </tr>
                        <tr>
                            <td>16:00 - 16:20</td>
                            <td>MPSH</td>
                            <td>
                                Pahoa 1: (20 minutes) <br>
                                Each performance includes an introduction of each member of the group, the setup, dance routine (3-7 minutes), and short Q&A if applicable. The judges may also make comments and give feedback about the performances.
                            </td>
                        </tr>
                        <tr>
                            <td>16:20 - 16:40</td>
                            <td>MPSH</td>
                            <td>
                                JNY (20 minutes) <br>
                                Each performance includes an introduction of each member of the group, the setup, dance routine (3-7 minutes), and short Q&A if applicable. The judges may also make comments and give feedback about the performances.
                            </td>
                        </tr>
                        <tr>
                            <td>16:40 - 17:00</td>
                            <td>MPSH</td>
                            <td>
                                Pahoa 2 (20 minutes) <br>
                                Each performance includes an introduction of each member of the group, the setup, dance routine (3-7 minutes), and short Q&A if applicable. The judges may also make comments and give feedback about the performances.
                            </td>
                        </tr>
                        <tr>
                            <td>17:00 - 17:20</td>
                            <td>MPSH</td>
                            <td>Closing Ceremony</td>
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
                <li>Each school may send a maximum of TWO teams.</li>
                <li>Each team must consist of 2 - 7 members (any gender).</li>
                <li>One person must only represent one team.</li>
                <li>No inappropriate or explicitly revealing clothes. The wardrobe must be respectful and adequately cover the chest and legs. (Crop tops are allowed but not too revealing)</li>
                <li>Performance must last between 3-7 minutes. They must perform an original dance cover of their choice.</li>
                <li>It is prohibited to add, replace, or change team members after registration.</li>
                <li>Maximum calls before the competition is 3 times. If the team does not show up, the committee will consider that team Walk Out (WO).</li>
                <li>Participants from respective schools are requested to bring their own MP3 file (Song file must be submitted in a USB, file name: group name - Song) to be handed in to the committee.</li>
                <li>
                    The judges will score the performance based on:
                    <ul>
                        <li>Skills and Teamwork (30%): Evaluates technical proficiency and collective cohesion among team members.</li>
                        <li>Synchronization (40%): Focuses on precise timing, coordinated movements, and unity within the team.</li>
                        <li>Expression (30%): Assesses emotional engagement, storytelling, and alignment of body language with dance style and theme.</li>
                    </ul>
                </li>
                <li>All judges' decisions are final and binding.</li>
            </ul>
        </div>
    </div>
@endsection
