<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>
<div>
    <h1>
        Result
    </h1>
</div>
<div class="address">
    <h3>Address: <span>{{$address}}</span></h3>
</div>
<div class="result">
    <div class="row">
        @if($data['status'] == 1))
        <table style="width:100%">
            <thead>
                <th>#</th>
                <th>From</th>
                <th>To</th>
                <th>Timestamp</th>
                <th>Value</th>
            </thead>
            <tbody>
                @for($i = 0; $i < count($data['result']); $i++)
                <tr>
                    <td>{{$i+1}}</td>
                    <td>{{$data['result'][$i]['from']}}</td>
                    <td>{{$data['result'][$i]['to']}}</td>
                    <td>{{$data['result'][$i]['timeStamp']}}</td>
                    <td>{{$data['result'][$i]['value']}}</td>
                </tr>
                @endfor
            </tbody>
        </table>
        @else
        <h1 style="text-align: center">Nothing found!</h1>
        @endif
    </div>
</div>
</body>
</html>