{{ content() }}
{{ form("health/save", "method":"post") }}

<table width="100%">
    <tr>
        <td align="left">{{ link_to("health", "Go Back") }}</td>
        <td align="right">{{ submit_button("Save") }}</td>
    </tr>
</table>

<div align="center">
    <h1>Edit health</h1>
</div>

<table>
    <tr>
        <td align="right">
            <label for="id">Id</label>
        </td>
        <td align="left">
            {{ text_field("id", "type" : "numeric") }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="studentId">StudentId</label>
        </td>
        <td align="left">
            {{ text_field("studentId", "type" : "numeric") }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="post_illness">Post Of Illness</label>
        </td>
        <td align="left">
            {{ text_field("post_illness", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="present_illness">Present Of Illness</label>
        </td>
        <td align="left">
            {{ text_field("present_illness", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="previous_hospitalization">Previous Of Hospitalization</label>
        </td>
        <td align="left">
            {{ text_field("previous_hospitalization", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="physical_disability">Physical Of Disability</label>
        </td>
        <td align="left">
            {{ text_field("physical_disability", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="relative_illness">Relative Of Illness</label>
        </td>
        <td align="left">
            {{ text_field("relative_illness", "size" : 30) }}
        </td>
    </tr>

    <tr>
        <td>{{ hidden_field("id") }}</td>
        <td>{{ submit_button("Save") }}</td>
    </tr>
</table>

</form>
