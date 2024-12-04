<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List PDF</title>
    <style>
        /* CSS sederhana yang didukung oleh mPDF */
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1>Task List</h1>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Name Task</th>
                <th>Description</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Author</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->status }}</td>
                    <td>{{ $item->created_at }}</td>
                    {{-- <td>{{ $item->created_at->format('Y-m-d') }}</td> --}}
                    <td>{{ $item->users->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
