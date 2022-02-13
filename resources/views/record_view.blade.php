<!DOCTYPE html>
<html lang="en">
<head>
    {{View::make('head')}}
</head>
<body>
    {{View::make('header')}}
    <section class="record section container" id="record">
        <div class="record__container grid">
            <div>
                <table class="content__table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Patient ID</th>
                            <th>Patient Name</th>
                            <th>Admit Date</th>
                            <th>Discharge Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data['list'] as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$patientArr[$item->id]->id}}</td>
                            <td>{{$patientArr[$item->id]->fName}}&nbsp;{{$patientArr[$item->id]->lName}}</td>
                            <td>{{$item->admitDate}}</td>
                            <td>{{$item->dischargeDate}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    {{View::make('footer')}}
</body>
</html>