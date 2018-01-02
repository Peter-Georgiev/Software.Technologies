package animelist.entity;

import javax.persistence.*;

@Entity
@Table(name = "animes")
public class Anime {
    //TODO: Implement me ...
    /*
        •	id – technology-dependent identifier (ObjectID for JavaScript, int for all other technologies)
        •	rating – non-null integer
        •	name – non-empty text
        •	description – non-empty text
        •	watched – non-empty text (will either be “watched” or “not watched”).
     */

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Integer id;

    @Column(nullable = false)
    private int rating;

    @Column(nullable = false)
    private String name;

    @Column(nullable = false)
    private String description;

    @Column(nullable = false)
    private String watched;

    public Integer getId() {
        return id;
    }

    public void setId(Integer id) {
        this.id = id;
    }

    public int getRating() {
        return rating;
    }

    public void setRating(int rating) {
        this.rating = rating;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public String getWatched() {
        return watched;
    }

    public void setWatched(String watched) {
        this.watched = watched;
    }
}
