package imdb.bindingModel;

import javax.persistence.Column;

public class FilmBindingModel {
	//TODO: Implement me ...

    @Column(nullable = false)
    private String name;

    @Column(nullable = false)
    private String genre;

    @Column(nullable = false)
    private String director;

    @Column(nullable = false)
    private Integer year;

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
