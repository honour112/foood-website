@extends("dashboard-deliver")

@section("content")
<div id="deli-details">
    <div class="del-table">
        <table>
            <thead>
                <tr>
                    <th colspan="6">DELIVERIES DETAILS</th>
                </tr>
            </thead>
            <tr>
                <th>id deliveries</th>
                <th>customer name</th>
                <th>food name</th>
                <th>address</th>
                <th>delivery time</th>
                <th>Statut</th>
            </tr>
            <tr>
                <td>240825001</td>
                <td>Bryanne <i>Simo</i></td>
                <td>Aschù</td>
                <td>Bonamoussadi</td>
                <td>14:45</td>
                <td>Completed</td>
            </tr>
            <tr>
                <td>240825002</td>
                <td>Daniella <i>smile</i></td>
                <td>Ndollè</td>
                <td>Akwa</td>
                <td>15:00</td>
                <td>Completed</td>
            </tr>
            <tr>
                <td>240825003</td>
                <td>Honour <i>Behionne</i></td>
                <td>Erù</td>
                <td>Bonaberi</td>
                <td>15:25</td>
                <td>On going</td>
            </tr>
            <tr>
                <td>240825004</td>
                <td>Raissa <i>Sahanne</i></td>
                <td>Ockock</td>
                <td>Makeppe</td>
                <td>15:50</td>
                <td>Unstarted</td>
            </tr>
            <tr>
                <td>240825005</td>
                <td>Ahmed <i>Amadou</i></td>
                <td>Fried rice and chicken</td>
                <td>Deido</td>
                <td>16:20</td>
                <td>Unstarted</td>
            </tr>
        </table>
    </div>
    <div class="del-vehicles">
        <table>
            <thead>
                <tr>
                    <th colspan="6">DELIVERIES VEHICLES</th>
                </tr>
            </thead>
            <tr>
                <th>vehicles matriculation</th>
                <th>vehicle type</th>
                <th>vehicle location</th>
                <th>vehicle statut</th>
                <th>user name</th>
            </tr>
            <tr>
                <td>LH-348-SC</td>
                <td>scooter</td>
                <td>south-parking</td>
                <td>Unavailable</td>
                <td>none</td>
            </tr>
            <tr>
                <td>LT322M8A</td>
                <td>car</td>
                <td>south-parking</td>
                <td>free</td>
                <td>None</td>
            </tr>
            <tr>
                <td>LT006M5Y</td>
                <td>car</td>
                <td>east-parking</td>
                <td>On using</td>
                <td>Gaylster</td>
                
            </tr>
            <tr>
                <td>LT400D2H</td>
                <td>car</td>
                <td>south-parking</td>
                <td>On using</td>
                <td>Mycheal</td>
                
            </tr>
            <tr>
                <td>DC-020-SC</td>
                <td>scooter</td>
                <td>east-parking</td>
                <td>free</td>
                <td>none</td>
                
            </tr>
        </table>
    </div>
</div>
@endsection