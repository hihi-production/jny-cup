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
                    &nbsp; battle of the bands schedule
                </a>
            </h1>

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
                            <td>7:00 AM</td>
                            <td>MPSH</td>
                            <td>Arrival</td>
                        </tr>
                        <tr>
                            <td>7:00 - 7:30</td>
                            <td>MPSH</td>
                            <td>Preparation</td>
                        </tr>
                        <tr>
                            <td>7:30 - 7:47</td>
                            <td>MPSH</td>
                            <td>
                                SPK SMAK 8 PENABUR (D'8)
                            </td>
                        </tr>
                        <tr>
                            <td>7:47 - 8:04</td>
                            <td>MPSH</td>
                            <td>
                                Mentari Intercultural School Grand Surya (Stuck in Rhapsody)
                            </td>
                        </tr>
                        <tr>
                            <td>8:04 - 8:21</td>
                            <td>MPSH</td>
                            <td>
                                Jakarta Nanyang School (The Zozo)
                            </td>
                        </tr>
                        <tr>
                            <td>8:21 - 8:38</td>
                            <td>MPSH</td>
                            <td>
                                Sekolah Dian Harapan Daan Mogot (WIZMAN)
                            </td>
                        </tr>
                        <tr>
                            <td>8:38 - 8:55</td>
                            <td>MPSH</td>
                            <td>
                                SMA UPH College (Youth Town)
                            </td>
                        </tr>
                        <tr>
                            <td>8:55 - 9:12</td>
                            <td>MPSH</td>
                            <td>
                                Saint John's Catholic School Kencana Loka (Concerto in 7)
                            </td>
                        </tr>
                        <tr>
                            <td>9:12 - 9:29</td>
                            <td>MPSH</td>
                            <td>SMA Pahoa (Twenty O Eight)</td>
                        </tr>
                        <tr>
                            <td>9:29 - 9:46</td>
                            <td>MPSH</td>
                            <td>Jakarta Nanyang School (The Silk Service)</td>
                        </tr>
                        <tr>
                            <td>9:46 - 10:03</td>
                            <td>MPSH</td>
                            <td>Mentari Intercultural School Bintaro (Era)</td>
                        </tr>
                        <tr>
                            <td>10:03 - 10:20</td>
                            <td>MPSH</td>
                            <td>SMP Pahoa (7 teen)</td>
                        </tr>
                        <tr>
                            <td>10:20 - 10:37</td>
                            <td>MPSH</td>
                            <td>Tunas Bangsa Gading Serpong (Hokband)</td>
                        </tr>
                        <tr>
                            <td>10:37 - 10:54</td>
                            <td>MPSH</td>
                            <td>Sekolah Dian Harapan Daan Mogot (Ecstasy)</td>
                        </tr>
                        <tr>
                            <td>10:54 - 11:11</td>
                            <td>MPSH</td>
                            <td>Stella Maris School Gading Serpong (Belvedere)</td>
                        </tr>
                        <tr>
                            <td>11:11 - 11:28</td>
                            <td>MPSH</td>
                            <td>Mentari Intercultural School Jakarta (NIW)</td>
                        </tr>
                        <tr>
                            <td>11:28 - 13:10</td>
                            <td>MPSH</td>
                            <td>Friday Prayers/Break</td>
                        </tr>
                        <tr>
                            <td>13:10 - 13:27</td>
                            <td>MPSH</td>
                            <td>SMAK Penabur Gading Serpong (LycoRA)</td>
                        </tr>
                        <tr>
                            <td>13:27 - 13:44</td>
                            <td>MPSH</td>
                            <td>Bunda Mulia School (Piney and the benches)</td>
                        </tr>
                        <tr>
                            <td>13:44 - 14:01</td>
                            <td>MPSH</td>
                            <td>Springfield School (Hexabeat)</td>
                        </tr>
                        <tr>
                            <td>14:01 - 14:18</td>
                            <td>MPSH</td>
                            <td>SMA UPH College (CCCoklat)</td>
                        </tr>
                        <tr>
                            <td>14:18 - 14:35</td>
                            <td>MPSH</td>
                            <td>SMA Pahoa (Lahope)</td>
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
                <li>All players must bring their own musical instruments (except for drums and keyboard).</li>
                <li>A team must comprises of 4-7 members.</li>
                <li>Every band will perform 1 song in front of the judges, who will assess and score them to determine the winner.</li>
                <li>Each band is limited to a maximum performance duration of 10 minutes.</li>
                <li>Prior to their performance, each band is granted a 5-minute period to conduct a sound check and make necessary preparations for their performance. This allows them to ensure optimal sound quality and readiness before taking the stage.</li>
                <li>Following their performance, each band will have a two-minute window to tidy up and exit the stage.</li>
                <li>The judging criteria for each band encompass their        skill level and originality, assessing these aspects to determine their performance quality. The judges evaluate the bands' technical proficiency, musical abilities, and innovative elements displayed during their performance.</li>
                <li>All participants must adhere to proper conduct and  display respectful behaviour throughout the event. Any form of mistreatment towards other bands will not be tolerated under any circumstances. It is expected that all individuals involved maintain a positive and supportive environment, promoting fair competition and camaraderie among participants.</li>
                <li>Participants are expected to come on time and late arrivals will cut into the sound check and performance time of the band.</li>
                <li>Should participants be late for their allotted time slot in its entirety, no additional time will be granted, and they will face disqualification.</li>
                <li>Swear words (if present) should be changed to other words, covered/censored, just not said, etc. (as long as none are said).</li>
                <li>All judges' decisions are final and binding.</li>
            </ul>
        </div>
    </div>
@endsection
