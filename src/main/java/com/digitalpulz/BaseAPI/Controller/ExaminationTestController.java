package com.digitalpulz.BaseAPI.Controller;

import java.util.Date;
import java.util.List;

import org.apache.log4j.Logger;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.DeleteMapping;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.PutMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import com.digitalpulz.BaseAPI.Entity.ExaminationTest;
import com.digitalpulz.BaseAPI.Model.RequestWrapper;
import com.digitalpulz.BaseAPI.Repository.ExaminationTestRepository;

import io.swagger.annotations.Api;

@RestController
@RequestMapping("/examinationTest")
@Api(value = "examinationTest")
public class ExaminationTestController {

	@Autowired
	ExaminationTestRepository examinationTestRepository;

	static final Logger logger = Logger.getLogger(ExaminationTestRepository.class);

	@PostMapping
	public ExaminationTest save(@RequestBody RequestWrapper request) {
		logger.info("Create examination test method");
		try {
			ExaminationTest examinationTest = new ExaminationTest();

			examinationTest.setName(request.getExaminationTestData().getName());
			examinationTest.setCreatedAt(new Date());
			examinationTest.setCreatedBy(request.getExaminationTestData().getLoggedUser());
			examinationTest.setActive(true);

			return examinationTestRepository.save(examinationTest);
		} catch (Exception e) {
			e.printStackTrace();
			logger.error("Create examination test method error: " + e.getMessage() + ", " + e.getCause());
			return null;
		}

	}

	@PutMapping(value = "/{id}")
	public ResponseEntity<ExaminationTest> update(@PathVariable("id") Long id, @RequestBody RequestWrapper request) {
		return examinationTestRepository.findById(id).map(updateTest -> {
			logger.info("Update examination test method");
			try {

				updateTest.setName(request.getExaminationTestData().getName());
				updateTest.setUpdatedAt(new Date());
				updateTest.setUpdatedBy(request.getExaminationTestData().getLoggedUser());

				examinationTestRepository.save(updateTest);

				return ResponseEntity.ok().body(updateTest);

			} catch (Exception ex) {
				ex.printStackTrace();
				logger.error("Update examination test method error: " + ex.getMessage() + ", " + ex.getCause());
				return null;
			}

		}).orElse(ResponseEntity.notFound().build());
	}

	@GetMapping(value = "/{id}")
	public ExaminationTest getById(@PathVariable("id") Long id) {
		logger.info("Get examination test by id method");
		try {

			ExaminationTest examinationTest = examinationTestRepository.findById(id).get();
			return examinationTest;
		} catch (Exception ex) {
			logger.error("Get examination test by id method error: " + ex.getMessage() + ", " + ex.getCause());
			return null;
		}
	}

	@GetMapping
	public List<ExaminationTest> getAllActiveTest() {
		logger.info("Get all active examination tests method");
		try {

			List<ExaminationTest> examinationTests = examinationTestRepository.getAllActiveTest().get();
			return examinationTests;
		} catch (Exception ex) {
			logger.error("Get all active examination tests method error: " + ex.getMessage() + ", " + ex.getCause());
			return null;
		}
	}

	@DeleteMapping(value = "/{id}")
	public ResponseEntity<ExaminationTest> delete(@PathVariable("id") Long id, @RequestBody RequestWrapper request) {
		return examinationTestRepository.findById(id).map(updateTest -> {
			logger.info("Delete examination test method");
			try {

				updateTest.setActive(false);
				updateTest.setUpdatedAt(new Date());
				updateTest.setUpdatedBy(request.getExaminationTestData().getLoggedUser());

				examinationTestRepository.save(updateTest);

				return ResponseEntity.ok().body(updateTest);

			} catch (Exception ex) {
				ex.printStackTrace();
				logger.error("Delete examination test method error: " + ex.getMessage() + ", " + ex.getCause());
				return null;
			}

		}).orElse(ResponseEntity.notFound().build());
	}
}
