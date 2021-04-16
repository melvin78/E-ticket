<?php
session_start();
if (!isset($_SESSION['user_id'])){
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <!--suppress JSUnresolvedLibraryURL -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!--suppress JSUnresolvedLibraryURL -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    <script src="../../js/view-ticket.js"></script>

    <style>

        .shadow {

            width: auto;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        #COG1,#COG2,#COG3{
            transform-origin: center;
            animation: rotation 1800ms infinite linear;
            transform-box: fill-box;
        }
        @keyframes rotation {
            from{
                transform: rotateZ(0deg);
            }
            to{
                transform: rotateZ(360deg);
            }
        }



    </style>
</head>
<body>

<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
    <div class="navbar-brand">
        <svg width="262" height="74" viewBox="0 0 262 74" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="icon">
                <path id="MELOSOLUTIONS" d="M91.0582 44.3324V45H87.4124V44.3324L88.3942 44.1425C88.5033 44.1251 88.5862 44.0836 88.6429 44.0182C88.704 43.9484 88.7411 43.8589 88.7542 43.7498L89.6771 36.0916C89.6945 35.9738 89.6749 35.8778 89.6182 35.8036C89.5658 35.7251 89.4807 35.6771 89.3629 35.6596L88.1782 35.4567V34.776H91.7324L94.2 42.4276L96.3731 34.776H99.9404V35.4567L98.7425 35.6596C98.6204 35.6815 98.5331 35.7316 98.4807 35.8102C98.4327 35.8844 98.4175 35.9825 98.4349 36.1047L99.6524 43.7564C99.6655 43.8611 99.7025 43.9484 99.7636 44.0182C99.8291 44.0836 99.912 44.1251 100.012 44.1425L100.988 44.3324V45H97.008V44.3324L98.232 44.1164L96.9622 36.072L94.5338 44.568H93.4865L90.6393 36.0655L89.7098 44.1164L91.0582 44.3324ZM109.239 37.2895H108.513L108.212 36.0524C108.185 35.952 108.142 35.8735 108.081 35.8167C108.02 35.7556 107.937 35.7055 107.832 35.6662C107.684 35.6095 107.489 35.5702 107.249 35.5484C107.014 35.5222 106.754 35.5091 106.471 35.5091H104.834V39.3578L108.022 39.2465V40.2545L104.834 40.1695V44.2015H106.844C107.127 44.2015 107.4 44.1905 107.662 44.1687C107.928 44.1469 108.135 44.1076 108.284 44.0509C108.384 44.0116 108.46 43.9615 108.513 43.9004C108.569 43.8393 108.615 43.7607 108.65 43.6647L109.141 42.2378L109.861 42.3425C109.857 42.7658 109.831 43.2022 109.783 43.6516C109.735 44.1011 109.669 44.5505 109.586 45H101.987V44.3324L103.034 44.1425C103.148 44.1207 103.233 44.0749 103.289 44.0051C103.346 43.9353 103.375 43.8436 103.375 43.7302V36.072C103.375 35.9629 103.344 35.8735 103.283 35.8036C103.226 35.7295 103.143 35.6815 103.034 35.6596L101.987 35.4567V34.776H109.252C109.287 35.1818 109.303 35.592 109.298 36.0065C109.298 36.4211 109.279 36.8487 109.239 37.2895ZM117.706 43.6516L118.269 41.8713L119.022 41.9825C119.013 42.4451 118.987 42.9447 118.943 43.4815C118.904 44.0182 118.836 44.5244 118.74 45H111.18V44.3324L112.228 44.1491C112.341 44.1316 112.426 44.088 112.483 44.0182C112.54 43.944 112.568 43.8524 112.568 43.7433V36.0655C112.568 35.952 112.54 35.8604 112.483 35.7905C112.426 35.7207 112.341 35.6749 112.228 35.6531L111.18 35.4567V34.776H115.729V35.4567L114.368 35.6662C114.254 35.6836 114.167 35.7273 114.106 35.7971C114.049 35.8669 114.021 35.9585 114.021 36.072V44.2015H115.886C116.192 44.2015 116.469 44.1884 116.718 44.1622C116.971 44.136 117.174 44.0945 117.326 44.0378C117.427 44.0029 117.508 43.9549 117.569 43.8938C117.63 43.8327 117.676 43.752 117.706 43.6516ZM124.399 45.1702C123.696 45.1702 123.077 45.0524 122.54 44.8167C122.008 44.5767 121.565 44.2364 121.211 43.7956C120.858 43.3549 120.592 42.8182 120.413 42.1855C120.234 41.5484 120.144 40.8371 120.144 40.0516C120.144 39.1789 120.253 38.4044 120.472 37.728C120.694 37.0473 121.004 36.4778 121.401 36.0196C121.803 35.5615 122.287 35.2124 122.854 34.9724C123.421 34.7324 124.052 34.6124 124.746 34.6124C125.448 34.6124 126.066 34.7324 126.598 34.9724C127.135 35.208 127.578 35.5462 127.927 35.9869C128.28 36.4233 128.547 36.9578 128.725 37.5905C128.904 38.2233 128.994 38.9324 128.994 39.7178C128.994 40.5818 128.885 41.3542 128.667 42.0349C128.453 42.7113 128.145 43.2807 127.744 43.7433C127.347 44.2058 126.864 44.5593 126.297 44.8036C125.73 45.048 125.097 45.1702 124.399 45.1702ZM124.582 35.3847C123.692 35.3847 122.998 35.7578 122.501 36.504C122.003 37.2458 121.755 38.3782 121.755 39.9011C121.755 41.3673 121.986 42.4822 122.448 43.2458C122.915 44.0095 123.613 44.3913 124.543 44.3913C125.433 44.3913 126.127 44.016 126.624 43.2655C127.122 42.5149 127.371 41.376 127.371 39.8487C127.371 38.3869 127.139 37.2785 126.677 36.5236C126.214 35.7644 125.516 35.3847 124.582 35.3847ZM137.478 42.2771C137.478 42.6393 137.409 42.9971 137.269 43.3505C137.129 43.704 136.916 44.0182 136.628 44.2931C136.34 44.568 135.971 44.7905 135.521 44.9607C135.072 45.1309 134.54 45.216 133.924 45.216C133.235 45.216 132.613 45.1265 132.059 44.9476C131.505 44.7644 131.057 44.5702 130.717 44.3651C130.7 43.9462 130.702 43.5207 130.724 43.0887C130.745 42.6524 130.785 42.2247 130.841 41.8058H131.712L131.954 43.3375C131.967 43.4073 131.989 43.4815 132.02 43.56C132.054 43.6385 132.111 43.7171 132.19 43.7956C132.36 43.9702 132.609 44.1295 132.936 44.2735C133.263 44.4175 133.63 44.4895 134.036 44.4895C134.673 44.4895 135.157 44.3324 135.489 44.0182C135.825 43.6996 135.993 43.272 135.993 42.7353C135.993 42.4211 135.936 42.1505 135.822 41.9236C135.709 41.6967 135.552 41.496 135.351 41.3215C135.15 41.1469 134.906 40.9855 134.618 40.8371C134.334 40.6887 134.02 40.536 133.676 40.3789C133.357 40.2305 133.032 40.0691 132.7 39.8945C132.369 39.72 132.07 39.5149 131.804 39.2793C131.537 39.0436 131.317 38.7644 131.142 38.4415C130.972 38.1142 130.887 37.7302 130.887 37.2895C130.887 36.9011 130.959 36.5433 131.103 36.216C131.247 35.8844 131.459 35.6007 131.738 35.3651C132.017 35.1251 132.366 34.9375 132.785 34.8022C133.204 34.6669 133.689 34.5993 134.238 34.5993C134.714 34.5993 135.194 34.6495 135.678 34.7498C136.167 34.8458 136.582 34.9767 136.922 35.1425C136.953 35.5745 136.957 35.9935 136.935 36.3993C136.918 36.8007 136.881 37.1913 136.824 37.5709H135.986L135.731 36.2291C135.713 36.1462 135.683 36.0655 135.639 35.9869C135.6 35.904 135.537 35.8276 135.449 35.7578C135.314 35.64 135.116 35.5375 134.854 35.4502C134.592 35.3585 134.308 35.3127 134.003 35.3127C133.436 35.3127 133.004 35.448 132.707 35.7185C132.41 35.9847 132.262 36.36 132.262 36.8444C132.262 37.1411 132.314 37.3964 132.419 37.6102C132.528 37.8196 132.685 38.0116 132.89 38.1862C133.095 38.3564 133.346 38.52 133.643 38.6771C133.944 38.8342 134.286 39.0044 134.67 39.1876C135.024 39.3535 135.369 39.5324 135.705 39.7244C136.045 39.912 136.344 40.1258 136.601 40.3658C136.863 40.6058 137.075 40.8829 137.236 41.1971C137.398 41.5069 137.478 41.8669 137.478 42.2771ZM143.278 45.1702C142.575 45.1702 141.956 45.0524 141.419 44.8167C140.887 44.5767 140.444 44.2364 140.09 43.7956C139.737 43.3549 139.471 42.8182 139.292 42.1855C139.113 41.5484 139.023 40.8371 139.023 40.0516C139.023 39.1789 139.132 38.4044 139.351 37.728C139.573 37.0473 139.883 36.4778 140.28 36.0196C140.681 35.5615 141.166 35.2124 141.733 34.9724C142.3 34.7324 142.931 34.6124 143.625 34.6124C144.327 34.6124 144.945 34.7324 145.477 34.9724C146.014 35.208 146.457 35.5462 146.806 35.9869C147.159 36.4233 147.425 36.9578 147.604 37.5905C147.783 38.2233 147.873 38.9324 147.873 39.7178C147.873 40.5818 147.764 41.3542 147.545 42.0349C147.332 42.7113 147.024 43.2807 146.623 43.7433C146.225 44.2058 145.743 44.5593 145.176 44.8036C144.609 45.048 143.976 45.1702 143.278 45.1702ZM143.461 35.3847C142.571 35.3847 141.877 35.7578 141.38 36.504C140.882 37.2458 140.633 38.3782 140.633 39.9011C140.633 41.3673 140.865 42.4822 141.327 43.2458C141.794 44.0095 142.492 44.3913 143.422 44.3913C144.312 44.3913 145.006 44.016 145.503 43.2655C146.001 42.5149 146.249 41.376 146.249 39.8487C146.249 38.3869 146.018 37.2785 145.556 36.5236C145.093 35.7644 144.395 35.3847 143.461 35.3847ZM155.815 43.6516L156.378 41.8713L157.131 41.9825C157.122 42.4451 157.096 42.9447 157.053 43.4815C157.013 44.0182 156.946 44.5244 156.85 45H149.29V44.3324L150.337 44.1491C150.45 44.1316 150.535 44.088 150.592 44.0182C150.649 43.944 150.677 43.8524 150.677 43.7433V36.0655C150.677 35.952 150.649 35.8604 150.592 35.7905C150.535 35.7207 150.45 35.6749 150.337 35.6531L149.29 35.4567V34.776H153.839V35.4567L152.477 35.6662C152.364 35.6836 152.277 35.7273 152.215 35.7971C152.159 35.8669 152.13 35.9585 152.13 36.072V44.2015H153.996C154.301 44.2015 154.578 44.1884 154.827 44.1622C155.08 44.136 155.283 44.0945 155.436 44.0378C155.536 44.0029 155.617 43.9549 155.678 43.8938C155.739 43.8327 155.785 43.752 155.815 43.6516ZM163.957 34.776H167.564V35.4567L166.772 35.6465C166.663 35.6727 166.58 35.7229 166.523 35.7971C166.471 35.8669 166.444 35.9585 166.444 36.072V41.2298C166.444 42.6 166.106 43.5949 165.43 44.2145C164.753 44.8298 163.817 45.1375 162.622 45.1375C161.33 45.1375 160.383 44.8015 159.781 44.1295C159.179 43.4531 158.878 42.4364 158.878 41.0793V36.0655C158.878 35.9564 158.849 35.8669 158.793 35.7971C158.74 35.7273 158.66 35.6771 158.551 35.6465L157.798 35.4567V34.776H161.869V35.4567L160.717 35.6662C160.608 35.6836 160.523 35.7295 160.462 35.8036C160.405 35.8778 160.377 35.9716 160.377 36.0851V41.2233C160.377 42.3927 160.601 43.2153 161.051 43.6909C161.505 44.1665 162.113 44.4044 162.877 44.4044C163.78 44.4044 164.431 44.136 164.828 43.5993C165.225 43.0625 165.423 42.2967 165.423 41.3018V36.072C165.423 35.9585 165.395 35.8669 165.338 35.7971C165.281 35.7229 165.199 35.6771 165.089 35.6596L163.957 35.4567V34.776ZM175.797 45H170.574V44.3324L172.105 44.0967C172.223 44.0793 172.311 44.0378 172.367 43.9724C172.428 43.9069 172.459 43.8175 172.459 43.704V35.5091H171.687C171.399 35.5091 171.135 35.5244 170.895 35.5549C170.655 35.5811 170.473 35.616 170.351 35.6596C170.251 35.6945 170.172 35.7425 170.116 35.8036C170.059 35.8604 170.017 35.9411 169.991 36.0458L169.566 37.8982H168.78C168.737 37.3396 168.721 36.8095 168.735 36.3076C168.752 35.8058 168.791 35.2953 168.852 34.776H177.545C177.601 35.2953 177.632 35.808 177.636 36.3142C177.641 36.8204 177.621 37.3484 177.577 37.8982H176.792L176.373 36.0458C176.351 35.9411 176.312 35.8604 176.255 35.8036C176.199 35.7425 176.122 35.6945 176.026 35.6596C175.895 35.6116 175.716 35.5745 175.489 35.5484C175.267 35.5222 175.005 35.5091 174.704 35.5091H173.912V43.704C173.912 43.8175 173.943 43.9069 174.004 43.9724C174.065 44.0378 174.152 44.0793 174.265 44.0967L175.797 44.3324V45ZM183.067 34.776V35.4567L182.026 35.6596C181.917 35.6815 181.832 35.7273 181.771 35.7971C181.714 35.8669 181.686 35.9585 181.686 36.072V43.7302C181.686 43.8436 181.714 43.9353 181.771 44.0051C181.828 44.0749 181.913 44.1207 182.026 44.1425L183.067 44.3324V45H178.838V44.3324L179.886 44.1425C179.999 44.1207 180.084 44.0749 180.141 44.0051C180.198 43.9353 180.226 43.8436 180.226 43.7302V36.072C180.226 35.9629 180.196 35.8735 180.134 35.8036C180.078 35.7295 179.995 35.6815 179.886 35.6596L178.838 35.4567V34.776H183.067ZM188.735 45.1702C188.032 45.1702 187.413 45.0524 186.876 44.8167C186.344 44.5767 185.901 44.2364 185.547 43.7956C185.194 43.3549 184.928 42.8182 184.749 42.1855C184.57 41.5484 184.48 40.8371 184.48 40.0516C184.48 39.1789 184.589 38.4044 184.808 37.728C185.03 37.0473 185.34 36.4778 185.737 36.0196C186.138 35.5615 186.623 35.2124 187.19 34.9724C187.757 34.7324 188.388 34.6124 189.082 34.6124C189.784 34.6124 190.402 34.7324 190.934 34.9724C191.471 35.208 191.914 35.5462 192.263 35.9869C192.616 36.4233 192.882 36.9578 193.061 37.5905C193.24 38.2233 193.33 38.9324 193.33 39.7178C193.33 40.5818 193.221 41.3542 193.002 42.0349C192.789 42.7113 192.481 43.2807 192.08 43.7433C191.682 44.2058 191.2 44.5593 190.633 44.8036C190.066 45.048 189.433 45.1702 188.735 45.1702ZM188.918 35.3847C188.028 35.3847 187.334 35.7578 186.837 36.504C186.339 37.2458 186.09 38.3782 186.09 39.9011C186.09 41.3673 186.322 42.4822 186.784 43.2458C187.251 44.0095 187.949 44.3913 188.879 44.3913C189.769 44.3913 190.463 44.016 190.96 43.2655C191.458 42.5149 191.706 41.376 191.706 39.8487C191.706 38.3869 191.475 37.2785 191.013 36.5236C190.55 35.7644 189.852 35.3847 188.918 35.3847ZM198.608 44.3324V45H194.747V44.3324L195.794 44.1425C195.907 44.1207 195.992 44.0749 196.049 44.0051C196.106 43.9353 196.134 43.8436 196.134 43.7302V36.072C196.134 35.9629 196.104 35.8735 196.043 35.8036C195.986 35.7295 195.903 35.6815 195.794 35.6596L194.747 35.4567V34.776H197.594L202.824 42.7549V36.072C202.824 35.9629 202.793 35.8735 202.732 35.8036C202.675 35.7295 202.592 35.6815 202.483 35.6596L201.371 35.4567V34.776H205.043V35.4567L204.113 35.6596C204.004 35.6858 203.919 35.7338 203.858 35.8036C203.801 35.8691 203.773 35.9585 203.773 36.072V45H202.555L197.083 36.648V43.7302C197.083 43.848 197.112 43.9418 197.168 44.0116C197.225 44.0815 197.31 44.1251 197.424 44.1425L198.608 44.3324ZM213.311 42.2771C213.311 42.6393 213.241 42.9971 213.101 43.3505C212.961 43.704 212.748 44.0182 212.46 44.2931C212.172 44.568 211.803 44.7905 211.353 44.9607C210.904 45.1309 210.372 45.216 209.756 45.216C209.067 45.216 208.445 45.1265 207.891 44.9476C207.337 44.7644 206.889 44.5702 206.549 44.3651C206.532 43.9462 206.534 43.5207 206.556 43.0887C206.577 42.6524 206.617 42.2247 206.673 41.8058H207.544L207.786 43.3375C207.799 43.4073 207.821 43.4815 207.852 43.56C207.887 43.6385 207.943 43.7171 208.022 43.7956C208.192 43.9702 208.441 44.1295 208.768 44.2735C209.095 44.4175 209.462 44.4895 209.868 44.4895C210.505 44.4895 210.989 44.3324 211.321 44.0182C211.657 43.6996 211.825 43.272 211.825 42.7353C211.825 42.4211 211.768 42.1505 211.655 41.9236C211.541 41.6967 211.384 41.496 211.183 41.3215C210.983 41.1469 210.738 40.9855 210.45 40.8371C210.167 40.6887 209.852 40.536 209.508 40.3789C209.189 40.2305 208.864 40.0691 208.532 39.8945C208.201 39.72 207.902 39.5149 207.636 39.2793C207.369 39.0436 207.149 38.7644 206.975 38.4415C206.804 38.1142 206.719 37.7302 206.719 37.2895C206.719 36.9011 206.791 36.5433 206.935 36.216C207.079 35.8844 207.291 35.6007 207.57 35.3651C207.849 35.1251 208.199 34.9375 208.617 34.8022C209.036 34.6669 209.521 34.5993 210.071 34.5993C210.546 34.5993 211.026 34.6495 211.511 34.7498C211.999 34.8458 212.414 34.9767 212.754 35.1425C212.785 35.5745 212.789 35.9935 212.767 36.3993C212.75 36.8007 212.713 37.1913 212.656 37.5709H211.818L211.563 36.2291C211.545 36.1462 211.515 36.0655 211.471 35.9869C211.432 35.904 211.369 35.8276 211.281 35.7578C211.146 35.64 210.948 35.5375 210.686 35.4502C210.424 35.3585 210.14 35.3127 209.835 35.3127C209.268 35.3127 208.836 35.448 208.539 35.7185C208.242 35.9847 208.094 36.36 208.094 36.8444C208.094 37.1411 208.146 37.3964 208.251 37.6102C208.36 37.8196 208.517 38.0116 208.722 38.1862C208.927 38.3564 209.178 38.52 209.475 38.6771C209.776 38.8342 210.119 39.0044 210.503 39.1876C210.856 39.3535 211.201 39.5324 211.537 39.7244C211.877 39.912 212.176 40.1258 212.433 40.3658C212.695 40.6058 212.907 40.8829 213.068 41.1971C213.23 41.5069 213.311 41.8669 213.311 42.2771Z" fill="white"/>
                <g id="bottomline">
                    <path id="Vector" d="M47.2878 61.7C41.7435 72.9 40.4389 77.6 45.7387 67.5L48.5924 62H133.796C190.055 62 219 61.7 219 61C219 60.3 189.974 60 133.552 60C53.0768 60 48.1032 60.1 47.2878 61.7Z" fill="black"/>
                </g>
                <g id="COG1">
                    <path id="Vector_2" d="M11.5 47.1L6.70001 55.1L9.50001 60.3C11 63.2 13.2 67 14.2 68.7L16.2 72H25.8L35.5 71.9L40.3 64L45.1 56L40.5 47.5L35.8 39H26H16.2L11.5 47.1ZM33.8 51.6L36 56L33.5 60C31.1 63.9 30.8 64 25.6 64C20.3 64 20.3 64 18 59.6L15.6 55.3L18.2 50.9L20.8 46.5L26.2 46.8C31.6 47.2 31.7 47.2 33.8 51.6Z" fill="#251856"/>
                </g>
                <g id="COG3">
                    <path id="Vector_3" d="M44.5 29L39.8 37L44.3 45.2L48.7 53.5L58.6 53.7L68.5 54L73.3 45.9L78.1 37.9L73.7 29.7L69.3 21.5L59.2 21.2L49.2 20.9L44.5 29ZM62.4 29C63.9 29 65.2 30.3 66.8 33.4L69.2 37.8L66.6 41.9C64.1 45.9 63.8 46 58.7 46C53.6 46 53.5 46 51.1 41.5L48.8 37.1L51.5 32.4C54 28.2 54.5 27.8 57.2 28.4C58.9 28.7 61.2 29 62.4 29Z" fill="#1F4094"/>
                </g>
                <g id="COG2">
                    <path id="Vector_4" d="M12.4 10.1L7.70001 18.2L11.5 25.4C17 35.7 16 35.1 26.8 34.8L36.4 34.5L41.1 26.7L45.8 18.9L41.1 10.4L36.5 1.99999H26.8H17.2L12.4 10.1ZM31.1 9.99999C31.9 9.99999 33.6 12 34.8 14.5L37 19L34.2 23.5C31.8 27.5 31.1 28 28 27.9C22.8 27.8 21.2 26.9 18.5 22.4L16.1 18.4L19.1 13.6C22 8.89999 22.3 8.79999 25.8 9.39999C27.8 9.69999 30.2 9.99999 31.1 9.99999Z" fill="#252365"/>
                </g>
                <g id="topline">
                    <path id="Vector_5" d="M43 1.5C43 2.1 44.3037 5.6 45.9333 9.3L48.7852 16H133.933C190.074 16 219 15.7 219 15C219 14.3 190.074 14 133.852 14C87 14 48.7037 13.7 48.7037 13.2C48.7037 12 43.0815 0.4 43 1.5Z" fill="black"/>
                </g>
                <g id="squiggyline">
                    <path id="Vector_6" d="M9.60001 2.2C8.80001 3.5 6.40001 7.5 4.10001 11.2L0.100006 17.9L5.60001 27.4L11 36.9L5.60001 45.9L0.100006 54.9L4.60001 63.2C7.10001 67.7 9.60001 71.9 10.2 72.5C10.8 73 9.20001 69.5 6.70001 64.6C4.10001 59.8 2.00001 55.4 2.00001 55C2.00001 54.5 4.30001 50.3 7.10001 45.6L12.2 37.1L6.90001 27.3L1.70001 17.5L5.70001 11C10.7 2.8 12.2 1.97072e-06 11.6 1.97072e-06C11.3 1.97072e-06 10.4 1 9.60001 2.2Z" fill="black"/>
                </g>
            </g>
        </svg>


    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="login.php">Login </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="buyTicket.php">Book Ticket</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="view-my-booked-tickets.php">Check My Booked Tickets</a>
            </li>


        </ul>

    </div>
</nav>

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">

    </div>
    <div class="col-md-3"></div>
</div>
<div class="row">

    <div class="col-md-3"></div>
    <div class="col-md-6 jumbotron shadow">
        <h5>.Thats all! you can repeat the process however many times you may wish.
            Thank you for testing my application.You can visit my github profile
           <a href="https://github.com/melvin78">here.</a>You can find source code to my project there. </h5>
    </div>
</div>
<div class="row ">
    <div class="col-md-2"></div>
    <div class="col-md-8 mt-3 card" id="my-ticket-info">


        </div>
    </div>
</body>
</html>
<script>

</script>