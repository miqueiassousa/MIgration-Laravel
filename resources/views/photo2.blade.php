<body>

    <div style="
        display: flex;
        flex-direction: row;
        flex-wrap:wrap;
        justify-content: space-between;
">
        @for($i=0;$i<50;$i++)
            <div style="
            width: 150px;
            height: 150px;
            ">

            <img src="{{$url.$i}}" />
            </div>
        @endfor
    </div>
</html>
