package com.skya.springdemo.student;


import org.springframework.stereotype.Service;

import java.time.LocalDate;
import java.util.List;

@Service
public class StudentService {
    public List<Student> findAllStudents(){
        return List.of(
                new Student(
                        "Ashley",
                        "SATCHIVI",
                        LocalDate.now(),
                        "ashley@gmail.com",
                        22
                ),
                new Student(
                        "Yasmine",
                        "SATCHIVI",
                        LocalDate.now(),
                        "yasmine@gmail.com",
                        23
                ),
                new Student(
                        "Kokoe",
                        "SATCHIVI",
                        LocalDate.now(),
                        "kokoe@gmail.com",
                        23
                )
        );
    };

}
