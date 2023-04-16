import java.sql.*;
import java.util.ArrayList;
import java.util.List;

public class ProductDao {
    private String jdbcUrl;
    private String username;
    private String password;
    private Connection connection;
    
    public ProductDao(String jdbcUrl, String username, String password) {
        this.jdbcUrl = jdbcUrl;
        this.username = username;
        this.password = password;
    }
    
    private void connect() throws SQLException {
        if (connection == null || connection.isClosed()) {
            connection = DriverManager.getConnection(jdbcUrl, username, password);
        }
    }
    
    private void disconnect() throws SQLException {
        if (connection != null && !connection.isClosed()) {
            connection.close();
        }
    }
    
    public List<Product> getAllProducts() throws SQLException {
        List<Product> products = new ArrayList<>();
        String sql = "SELECT * FROM products";
        
        connect();
        
        Statement statement = connection.createStatement();
        ResultSet resultSet = statement.executeQuery(sql);
        
        while (resultSet.next()) {
            int id = resultSet.getInt("id");
            String name = resultSet.getString("name");
            double price = resultSet.getDouble("price");
            
            Product product = new Product(id, name, price);
            products.add(product);
        }
        
        resultSet.close();
        statement.close();
        
        disconnect();
        
        return products;
    }
    
    public Product getProductById(int id) throws SQLException {
        Product product = null;
        String sql = "SELECT * FROM products WHERE id = ?";
        
        connect();
        
        PreparedStatement statement = connection.prepareStatement(sql);
        statement.setInt(1, id);
        
        ResultSet resultSet = statement.executeQuery();
        
        if (resultSet.next()) {
            String name = resultSet.getString("name");
            double price = resultSet.getDouble("price");
            
            product = new Product(id, name, price);
        }
        
        resultSet.close();
        statement.close();
        
        disconnect();
        
        return product;
    }
}