<!doctype html>
<html>

<head>
  <meta charset="utf-8" />
  <title>New Message</title>
</head>

<body style="margin:0;background:#f5f5f5;font:14px Arial,sans-serif;color:#333">
  <table width="100%" cellpadding="20" cellspacing="0">
    <tr>
      <td align="center">
        <table width="600" cellpadding="0" cellspacing="0" style="background:#fff;border:1px solid #ddd">
          <tr>
            <td style="padding:20px">
              <h2 style="margin:0 0 15px;font-size:20px;color:#111">New Contact Message</h2>

              <table width="100%" cellpadding="6" cellspacing="0">
                <tr>
                  <td width="120"><strong>Name</strong></td>
                  <td>{{ $data['full_name'] ?? '-' }}</td>
                </tr>

                <tr>
                  <td><strong>Company</strong></td>
                  <td>{{ $data['company'] ?: '-' }}</td>
                </tr>

                <tr>
                  <td><strong>Email</strong></td>
                  <td>
                    <a href="mailto:{{ $data['email'] ?? '' }}"> {{ $data['email'] ?? '-' }} </a>
                  </td>
                </tr>

                <tr>
                  <td><strong>Phone</strong></td>
                  <td>{{ $data['phone'] ?? '-' }}</td>
                </tr>
              </table>

              <p style="margin:20px 0 8px"><strong>Message</strong></p>

              <div style="padding:12px;border:1px solid #ddd;white-space:pre-line">{{ $data['message'] ?? '-' }}</div>

              <hr style="margin:20px 0;border:0;border-top:1px solid #eee" />

              <p style="margin:0;font-size:12px;color:#777">
                Automatic notification from
                <a href="{{ config('app.url') }}">{{ config('app.name') }}</a>.
              </p>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>

</html>
