package project.java.orders.services;

import java.util.InputMismatchException;
import java.util.Scanner;
import project.java.orders.models.Product;
import project.java.orders.App;


public class ProductService {
	public void insert(){
		Scanner input = new Scanner(System.in);
		System.out.println("Nhap thong tin san pham:");
		
		try {
			
			System.out.println("Ten san pham: ");
			String name = input.next();
			
			input.nextLine();
			 
			System.out.println("ID: ");
			int id = input.nextInt();
			
			System.out.println("So luong san pham: ");
			int quantity = input.nextInt();
			
			System.out.println("Ghi chu: ");
			String description = input.next(); 
			
			System.out.println("Gia: ");
			double price = input.nextDouble();
			
			Product p = new Product(name, id, quantity, description, price);
			App.PRODUCTS.add(p);//goi tu bien static//
			
    	}catch(InputMismatchException ei) {
    		System.out.println("Nhap lai gia tri tu 1->7!");
    	}catch(Exception e) {
    		System.out.print(e.getMessage());
    	}
	}
}

