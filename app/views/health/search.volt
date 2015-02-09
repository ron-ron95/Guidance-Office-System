
{{ content() }}

<table width="100%">
    <tr>
        <td align="left">
            {{ link_to("health/index", "Go Back") }}
        </td>
        <td align="right">
            {{ link_to("health/new", "Create ") }}
        </td>
    </tr>
</table>

<table class="browse" align="center">
    <thead>
        <tr>
            <th>Id</th>
            <th>StudentId</th>
            <th>Post Of Illness</th>
            <th>Present Of Illness</th>
            <th>Previous Of Hospitalization</th>
            <th>Physical Of Disability</th>
            <th>Relative Of Illness</th>
         </tr>
    </thead>
    <tbody>
    {% if page.items is defined %}
    {% for health in page.items %}
        <tr>
            <td>{{ health.id }}</td>
            <td>{{ health.studentId }}</td>
            <td>{{ health.post_illness }}</td>
            <td>{{ health.present_illness }}</td>
            <td>{{ health.previous_hospitalization }}</td>
            <td>{{ health.physical_disability }}</td>
            <td>{{ health.relative_illness }}</td>
            <td>{{ link_to("health/edit/"~health.id, "Edit") }}</td>
            <td>{{ link_to("health/delete/"~health.id, "Delete") }}</td>
        </tr>
    {% endfor %}
    {% endif %}
    </tbody>
    <tbody>
        <tr>
            <td colspan="2" align="right">
                <table align="center">
                    <tr>
                        <td>{{ link_to("health/search", "First") }}</td>
                        <td>{{ link_to("health/search?page="~page.before, "Previous") }}</td>
                        <td>{{ link_to("health/search?page="~page.next, "Next") }}</td>
                        <td>{{ link_to("health/search?page="~page.last, "Last") }}</td>
                        <td>{{ page.current~"/"~page.total_pages }}</td>
                    </tr>
                </table>
            </td>
        </tr>
    </tbody>
</table>
