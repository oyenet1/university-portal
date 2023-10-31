@extends('layouts.emails')
@section('title', 'Welcome Email')
@section('content')
    <table class="es-content" cellspacing="0" cellpadding="0" align="center"
        style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%">
        <tr style="border-collapse:collapse">
            <td style="padding:0;Margin:0;background-color:#CC0100" bgcolor="#CC0100" align="center">
                <table class="es-content-body"
                    style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px"
                    cellspacing="0" cellpadding="0" align="center">
                    <tr style="border-collapse:collapse">
                        <td align="left" style="padding:0;Margin:0">
                            <table width="100%" cellspacing="0" cellpadding="0"
                                style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                <tr style="border-collapse:collapse">
                                    <td valign="top" align="center" style="padding:0;Margin:0;width:600px">
                                        <table
                                            style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:separate;border-spacing:0px;background-color:#ffffff;border-radius:4px"
                                            width="100%" cellspacing="0" cellpadding="0" bgcolor="#ffffff"
                                            role="presentation">
                                            <tr style="border-collapse:collapse">
                                                <td align="center" style="padding:0;Margin:0;font-size:0px">
                                                    <img class="adapt-img" src="https://binters.com/img/logo.png"
                                                        alt="new work"
                                                        style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic"
                                                        width="120" height="auto">
                                                </td>
                                            </tr>
                                            <tr style="border-collapse:collapse">
                                                <td align="center"
                                                    style="padding:0;Margin:0;padding-bottom:5px;padding-left:30px;padding-right:30px">
                                                    <h1
                                                        style="Margin:0; text-transform:capitalize; line-height:38px;mso-line-height-rule:exactly;font-family:lato, 'helvetica neue', helvetica, arial, sans-serif;font-size:25px;font-style:normal;font-weight:medium;color:#111111">
                                                        Dear {{ $user->firstname }}</h1>
                                                </td>
                                            </tr>
                                            <tr style="border-collapse:collapse">
                                                <td bgcolor="#ffffff" align="center"
                                                    style="Margin:0;padding-top:5px;padding-bottom:5px;padding-left:20px;padding-right:20px;font-size:0">
                                                    <table width="100%" height="100%" cellspacing="0" cellpadding="0"
                                                        border="0" role="presentation"
                                                        style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                        <tr style="border-collapse:collapse">
                                                            <td
                                                                style="padding:0;Margin:0;border-bottom:1px solid #ffffff;background:#FFFFFF none repeat scroll 0% 0%;height:1px;width:100%;margin:0px">
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table class="es-content" cellspacing="0" cellpadding="0" align="center"
        style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%">
        <tr style="border-collapse:collapse">
            <td align="center" bgcolor="#fafafa" style="padding:0;Margin:0;background-color:#fafafa">
                <table class="es-content-body"
                    style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px"
                    cellspacing="0" cellpadding="0" align="center">
                    <tr style="border-collapse:collapse">
                        <td align="left" style="padding:0;Margin:0">
                            <table width="100%" cellspacing="0" cellpadding="0"
                                style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                <tr style="border-collapse:collapse">
                                    <td valign="top" align="center" style="padding:0;Margin:0;width:600px">
                                        <table
                                            style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:separate;border-spacing:0px;border-radius:4px;background-color:#ffffff"
                                            width="100%" cellspacing="0" cellpadding="0" bgcolor="#ffffff"
                                            role="presentation">
                                            <tr style="border-collapse:collapse">
                                                <td class="es-m-txt-l" bgcolor="#ffffff" align="left"
                                                    style="Margin:0;padding-top:20px;padding-bottom:20px;padding-left:30px;padding-right:30px">
                                                    <p
                                                        style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:lato, 'helvetica neue', helvetica, arial, sans-serif;line-height:27px;color:#666666;font-size:18px">

                                                        @if ($user->current_role == 'customer')
                                                            <p>
                                                                Smart people shop at Binters, welcome. As you shop, you earn
                                                                points. As your friends and family shop, you earn additional
                                                                points. Thank you for joining us. If you have any concerns,
                                                                please reach out, we will help
                                                            </p>
                                            <tr style="border-collapse:collapse">
                                                <td align="center"
                                                    style="Margin:0;padding-left:10px;padding-right:10px;padding-top:35px;padding-bottom:35px">
                                                    <span class="es-button-border"
                                                        style="border-style:solid;border-color:#CC0100;background:#CC0100;border-width:1px;display:inline-block;border-radius:45px;width:auto">
                                                        <a href="{{ route('homepage') }}" class="es-button es-button-1"
                                                            target="_blank"
                                                            style="mso-style-priority:100 !important;text-decoration:none;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;color:#FFFFFF;font-size:16px;border-style:solid;border-color:#CC0100;border-width:15px 30px;display:inline-block;background:#CC0100;border-radius:45px;font-family:verdana, geneva, sans-serif;font-weight:normal;font-style:normal;line-height:19px;width:auto;text-align:center">
                                                            Continue shopping </a>
                                                    </span>
                                                </td>
                                            </tr>
                                        @elseif ($user->current_role == 'vendor')
                                            <p>
                                                Welcome to partnering with us. All our members around here will be
                                                buying from you everyday. Upload your items for them to see and buy.
                                                See you soon for physical verification.
                                            </p>
                                        @else
                                            @endif
                                    </td>
                                </tr>
                                {{-- <tr style="border-collapse:collapse">
                                <td align="center"
                                    style="Margin:0;padding-left:10px;padding-right:10px;padding-top:35px;padding-bottom:35px">
                                    <span class="es-button-border"
                                        style="border-style:solid;border-color:#CC0100;background:#CC0100;border-width:1px;display:inline-block;border-radius:45px;width:auto">
                                        <a href="{{ route('homepage') }}" class="es-button es-button-1" target="_blank"
                                            style="mso-style-priority:100 !important;text-decoration:none;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;color:#FFFFFF;font-size:16px;border-style:solid;border-color:#CC0100;border-width:15px 30px;display:inline-block;background:#CC0100;border-radius:45px;font-family:verdana, geneva, sans-serif;font-weight:normal;font-style:normal;line-height:19px;width:auto;text-align:center">
                                            Continue shopping </a>
                                    </span>
                                </td>
                            </tr> --}}
                                <tr style="border-collapse:collapse">
                                    <td class="es-m-txt-l" align="left"
                                        style="Margin:0;padding-top:20px;padding-left:30px;padding-right:30px;padding-bottom:40px">
                                        <p
                                            style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:lato, 'helvetica neue', helvetica, arial, sans-serif;line-height:27px;color:#666666;font-size:18px">
                                            <em>Best Regards,</em>
                                        </p>
                                        <p
                                            style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:lato, 'helvetica neue', helvetica, arial, sans-serif;line-height:27px;color:#666666;font-size:18px">
                                            <strong>Binters Management</strong>.
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    </td>
    </tr>
    </table>
    <table class="es-content" cellspacing="0" cellpadding="0" align="center"
        style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%">
        <tr style="border-collapse:collapse">
            <td align="center" bgcolor="#fafafa" style="padding:0;Margin:0;background-color:#fafafa">
                <table class="es-content-body"
                    style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px"
                    cellspacing="0" cellpadding="0" align="center">
                    <tr style="border-collapse:collapse">
                        <td align="left" style="padding:0;Margin:0">
                            <table width="100%" cellspacing="0" cellpadding="0"
                                style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                <tr style="border-collapse:collapse">
                                    <td valign="top" align="center" style="padding:0;Margin:0;width:600px">
                                        <table width="100%" cellspacing="0" cellpadding="0" role="presentation"
                                            style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                            <tr style="border-collapse:collapse">
                                                <td align="center"
                                                    style="Margin:0;padding-top:10px;padding-bottom:20px;padding-left:20px;padding-right:20px;font-size:0">
                                                    <table width="100%" height="100%" cellspacing="0" cellpadding="0"
                                                        border="0" role="presentation"
                                                        style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                        <tr style="border-collapse:collapse">
                                                            <td
                                                                style="padding:0;Margin:0;border-bottom:1px solid #f4f4f4;background:#FFFFFF none repeat scroll 0% 0%;height:1px;width:100%;margin:0px">
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
@endsection
