package com.digitalpulz.BaseAPI.Model;

public class ExaminationTestData {

	private long id;

	private String name;

	private int loggedUser;

	public String getName() {
		return name;
	}

	public void setName(String name) {
		this.name = name;
	}

	public long getId() {
		return id;
	}

	public void setId(long id) {
		this.id = id;
	}

	public int getLoggedUser() {
		return loggedUser;
	}

	public void setLoggedUser(int loggedUser) {
		this.loggedUser = loggedUser;
	}

}
