package imdb.entity;

import javax.persistence.*;

@Entity
@Table(name = "films")
public class Film {
	//TODO: Implement me ...
    /*
    •	id – technology-dependent identifier (ObjectID for JavaScript, int for all other technologies)
    •	name – non-empty text
    •	genre – non-empty text
    •	director – non-empty text
    •	year – non-null integer
     */

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private int id;

    @Column(nullable = false)
    private String name;

    @Column(nullable = false)
    private String genre;

    @Column(nullable = false)
    private String director;

    @Column(nullable = false)
    private Integer year;

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getGenre() {
        return genre;
    }

    public void setGenre(String genre) {
        this.genre = genre;
    }

    public String getDirector() {
        return director;
    }

    public void setDirector(String director) {
        this.director = director;
    }

    public Integer getYear() {
        return year;
    }

    public void setYear(Integer year) {
        this.year = year;
    }
}
