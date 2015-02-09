
{{ content() }}

<div align="right">
    {{ link_to("know_yourself/new", "Create know_yourself") }}
</div>

{{ form("know_yourself/search", "method":"post", "autocomplete" : "off") }}

<div align="center">
    <h1>Search know_yourself</h1>
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
            <label for="describe_yourself">Describe Of Yourself</label>
        </td>
        <td align="left">
            {{ text_field("describe_yourself", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="strengths">Strengths</label>
        </td>
        <td align="left">
            {{ text_field("strengths", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="areas_improved">Areas Of Improved</label>
        </td>
        <td align="left">
            {{ text_field("areas_improved", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="skills">Skills</label>
        </td>
        <td align="left">
            {{ text_field("skills", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="hobbies">Hobbies</label>
        </td>
        <td align="left">
            {{ text_field("hobbies", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="subject_easy">Subject Of Easy</label>
        </td>
        <td align="left">
            {{ text_field("subject_easy", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="subject_hard">Subject Of Hard</label>
        </td>
        <td align="left">
            {{ text_field("subject_hard", "size" : 30) }}
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
        <td></td>
        <td>{{ submit_button("Search") }}</td>
    </tr>
</table>

</form>
