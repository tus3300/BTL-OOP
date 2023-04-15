package project.java.orders.models;

import java.util.ArrayList;
import java.util.List;

public class Order {
	private int Id;
	private String customerName,phone,email;
	
	private List<OrderDetail> orderDetails = new ArrayList<OrderDetail>();
	
	public int getId() {
		return Id;
	}
	public void setId(int id) {
		Id = id;
	}
	public String getCustomerName() {
		return customerName;
	}
	public void setCustomerName(String customerName) {
		this.customerName = customerName;
	}
	public String getPhone() {
		return phone;
	}
	public void setPhone(String phone) {
		this.phone = phone;
	}
	public String getEmail() {
		return email;
	}
	public void setEmail(String email) {
		this.email = email;
	}
	
}