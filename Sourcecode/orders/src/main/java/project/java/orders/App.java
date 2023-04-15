package project.java.orders;

import java.util.List;
import java.util.ArrayList;
import java.util.InputMismatchException;
import java.util.Scanner;
import project.java.orders.models.Order;
import project.java.orders.models.Product;
import project.java.orders.services.ProductService;



public class App 
{
	public static List<Product> PRODUCTS = new ArrayList<Product>();
	public static List<Order> ORDERS = new ArrayList<Order>();
	
	public static void menu() {
		System.out.println("1.Them san pham");
		System.out.println("2.Hien thi");
		System.out.println("3.Chinh sua");
		System.out.println("4.Huy don");
		System.out.println("5.Mua hang");
		System.out.println("6.Danh sach don hang");
		System.out.println("7.Thoat");
	}
	
    public static void main(String[] args )
    {
        int c=0;
        do {        
        	Scanner input = new Scanner(System.in);
        	menu();
        	try {
        		System.out.print("Moi chon: ");
            	c = input.nextInt();
            	ProductService productService = new ProductService();
            	
            	switch(c) {
            	case 1:
            		productService.insert();
            		break;
            	case 2:
            		
            		break;
            	case 3:
            		
            		break;
            	case 4:
            		
            		break;
            	case 5:
            		
            		break;
            	case 6:
            		
            		break;
            	default:
            		break;
            	}
            	
        	}catch(InputMismatchException ei) {
        		System.out.println("Nhap lai gia tri tu 1->7!");
        	}catch(Exception e) {
        		System.out.print(e.getMessage());
        	}
        }while(c != 7);
        System.out.println("Cam on da lua chon dich vu cua chung toi!");
    }
}