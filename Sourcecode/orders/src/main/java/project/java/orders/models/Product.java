package project.java.orders.models;

public class Product {
	private String name;
	private int id;
	private int quantity;
	private String description;
	private double price;
	
	public Product(String name, int id, int quantity, String description, double price) {
		super();
		this.name = name;
		this.id = id;
		this.quantity = quantity;
		this.description = description;
		this.price = price;
	}
	public int getId() {
		return id;
	}
	public void setId(int id) {
		this.id = id;
	}
	public int getQuantity() {
		return quantity;
	}
	public void setQuantity(int quantity) {
		this.quantity = quantity;
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
}
