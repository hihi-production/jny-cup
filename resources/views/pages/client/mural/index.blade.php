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
            <h1 class="text-capitalize">mural schedule</h1>

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
                            <td>7:40 AM</td>
                            <td>Art room 2, Hallway</td>
                            <td>Arrival and preparation</td>
                        </tr>
                        <tr>
                            <td>8:00 AM - 12:00 NN</td>
                            <td>Art room 2, Hallway</td>
                            <td>Competition time</td>
                        </tr>
                        <tr>
                            <td>12:00 NN - 1:00 PM</td>
                            <td>Art room 2, Hallway</td>
                            <td>Lunch time (optional)</td>
                        </tr>
                        <tr>
                            <td>1:00 PM - 3:00 PM</td>
                            <td>Art room 2, Hallway</td>
                            <td>Competition time</td>
                        </tr>
                        <tr>
                            <td>3.00 PM - finish</td>
                            <td>Art room 2, Hallway</td>
                            <td>Cleaning up and finish</td>
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
                <li>Each school must have at least one teacher supervising.</li>
                <li>The mural theme is "Prince and beggars".</li>
                <li>The working time is from 08:00 to 15:00 (including recess). If any participants still work after 15:00, they will be disqualified.</li>
                <li>Any teams that arrive late will not be given extra time.</li>
                <li>Participants are required to bring their own paints and painting equipment, apart from the ones provided by the committee.</li>
                <li>
                    The equipment provided by the committee is:
                    <ul>
                        <li>Small bucket (for water storages)</li>
                        <li>Washcloth</li>
                        <li>Trash bag</li>
                        <li>Plywood 120cm x 240cm</li>
                    </ul>
                </li>
                <li>The work must not contain SARA, pornography or be provocative in any form (spreading hate/hostility).</li>
                <li>The competition will be held if the minimum required number of 5 participating teams is met.</li>
                <li>All work must be hand-drawn or painted. The use of spray paints or any print techniques is prohibited.</li>
                <li>Other regulations and details will be provided at the Technical Meeting.</li>
                <li>No phone or any electrical device is allowed</li>
                <li>The artwork must be one's original work</li>
                <li>Tracing is not allowed</li>
                <li>You are not allowed to disturb other competitors</li>
                <li>Only acrylic paints and dry mediums are allowed</li>
                <li>No extra time will be given after the competition is done</li>
                <li>Participants are to arrange their own break time during the competition</li>
                <li>Participants are not allowed to communicate with their coach during the competition</li>
                <li>You are allowed to wear comfortable and appropriate clothes (no sandal, short pants or skirts, and sleeveless are allowed)</li>
                <li>All decisions are final and binding.</li>
            </ul>
        </div>
    </div>
@endsection
