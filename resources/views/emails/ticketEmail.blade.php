    __Hi {{ $data['fname'] }},__<br><br>
    Reply your ticket<br><br>
    <p>
        Your Ticket Id is dt#{!! $data['id'] !!}<br>
        {!! $data['reply'] !!}<br>
    </p>
    Thanks,<br>
    @lang('Best Regards'),<br>
    {{ config('app.name') }}
