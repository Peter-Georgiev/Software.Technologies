package projectrider.entity;

import javax.persistence.*;

@Entity
@Table(name = "projets")
public class Project {
    //TODO: Implement me ...
    /*
     * •	id – technology-dependent identifier (ObjectID for JavaScript, int for all other technologies)
        •	title – non-empty text
        •	description – non-empty text
        •	budget – a 64-bit integer
     */

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Integer id;

    @Column(nullable = false)
    private String title;

    @Column(nullable = false)
    private String description;

    @Column(nullable = false)
    private long budget;

    public Integer getId() {
        return id;
    }

    public void setId(Integer id) {
        this.id = id;
    }

    public String getTitle() {
        return title;
    }

    public void setTitle(String title) {
        this.title = title;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public long getBudget() {
        return budget;
    }

    public void setBudget(long budget) {
        this.budget = budget;
    }
}
