import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

class Product {
    private String id;
    private String name;
    private double price;

    public Product(String id, String name, double price) {
        this.id = id;
        this.name = name;
        this.price = price;
    }

    // Getters and setters

    public String getId() {
        return id;
    }

    public void setId(String id) {
        this.id = id;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public double getPrice() {
        return price;
    }

    public void setPrice(double price) {
        this.price = price;
    }
}

class Order {
    private String id;
    private List<Product> products;
    private double totalPrice;

    public Order(String id) {
        this.id = id;
        this.products = new ArrayList<>();
        this.totalPrice = 0.0;
    }

    // Getters and setters

    public String getId() {
        return id;
    }

    public void setId(String id) {
        this.id = id;
    }

    public List<Product> getProducts() {
        return products;
    }

    public void setProducts(List<Product> products) {
        this.products = products;
    }

    public double getTotalPrice() {
        return totalPrice;
    }

    public void setTotalPrice(double totalPrice) {
        this.totalPrice = totalPrice;
    }

    // Add product to the order
    public void addProduct(Product product) {
        products.add(product);
        totalPrice += product.getPrice();
    }
}

class OrderManager {
    private Map<String, Order> orders;

    public OrderManager() {
        orders = new HashMap<>();
    }

    // Create a new order
    public Order createOrder(String orderId) {
        Order order = new Order(orderId);
        orders.put(orderId, order);
        return order;
    }

    // Get an order by its ID
    public Order getOrder(String orderId) {
        return orders.get(orderId);
    }

    // Add product to an order
    public void addProductToOrder(String orderId, Product product) {
        Order order = getOrder(orderId);
        if (order != null) {
            order.addProduct(product);
        } else {
            System.out.println("Order not found");
        }
    }

    // Calculate total sales
    public double calculateTotalSales() {
        double totalSales = 0.0;
        for (Order order : orders.values()) {
            totalSales += order.getTotalPrice();
        }
        return totalSales;
    }
}

public class App {
    public static void main(String[] args) {
        OrderManager orderManager = new OrderManager();

        // Create a new order
        Order order1 = orderManager.createOrder("ORD001");

        // Create products
        Product product1 = new Product("P001", "Product 1", 10.99);
        Product product2 = new Product("P002", "Product 2", 5.99);

        // Add products to the order
        orderManager.addProductToOrder("ORD001", product1);
    }
}
