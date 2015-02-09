
{{ content() }}

<table width="100%">
    <tr>
        <td align="left">
            {{ link_to("know_yourself/index", "Go Back") }}
        </td>
        <td align="right">
            {{ link_to("know_yourself/new", "Create ") }}
        </td>
    </tr>
</table>

<table class="browse" align="center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Describe Of Yourself</th>
            <th>Strengths</th>
            <th>Areas Of Improved</th>
            <th>Skills</th>
            <th>Hobbies</th>
            <th>Subject Of Easy</th>
            <th>Subject Of Hard</th>
            <th>StudentId</th>
         </tr>
    </thead>
    <tbody>
    {% if page.items is defined %}
    {% for know_yourself in page.items %}
        <tr>
            <td>{{ know_yourself.id }}</td>
            <td>{{ know_yourself.describe_yourself }}</td>
            <td>{{ know_yourself.strengths }}</td>
            <td>{{ know_yourself.areas_improved }}</td>
            <td>{{ know_yourself.skills }}</td>
            <td>{{ know_yourself.hobbies }}</td>
            <td>{{ know_yourself.subject_easy }}</td>
            <td>{{ know_yourself.subject_hard }}</td>
            <td>{{ know_yourself.studentId }}</td>
            <td>{{ link_to("know_yourself/edit/"~know_yourself.id, "Edit") }}</td>
            <td>{{ link_to("know_yourself/delete/"~know_yourself.id, "Delete") }}</td>
        </tr>
    {% endfor %}
    {% endif %}
    </tbody>
    <tbody>
        <tr>
            <td colspan="2" align="right">
                <table align="center">
                    <tr>
                        <td>{{ link_to("know_yourself/search", "First") }}</td>
                        <td>{{ link_to("know_yourself/search?page="~page.before, "Previous") }}</td>
                        <td>{{ link_to("know_yourself/search?page="~page.next, "Next") }}</td>
                        <td>{{ link_to("know_yourself/search?page="~page.last, "Last") }}</td>
                        <td>{{ page.current~"/"~page.total_pages }}</td>
                    </tr>
                </table>
            </td>
        </tr>
    </tbody>
</table>
