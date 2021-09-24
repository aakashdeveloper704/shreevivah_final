<table class="table">
    <thead>
        <tr>
            <td>Medical (7)</td>
            <td class="text-right bold">
                 {{round($medicalLeavesCount / (7 / 100), 2)}}
            </td>
        </tr>
        <tr>
            <td>Vacation (15)</td>
            <td class="text-right bold">
                {{round($vacationLeavesCount / (15 / 100), 2)}}
            </td>
        </tr>
        <tr>
            <td>Other (5)</td>
            <td class="text-right bold">
                {{round($otherLeavesCount / (5 / 100), 2)}}
            </td>
        </tr>
    </thead>
</table>