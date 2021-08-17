using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace system
{
    class Program
    {
        static double f1(double x, double y, double z)
        {
            return -0.1 * y * z * z;
        }
        static double f2(double x, double y, double z)
        {
            return -0.2 * y * z * z;
        }
        static void euler_system(double x0, double y0, double z0, double h, double xn)
        {
            for (double i = x0 + h; i <= xn; i = i + h)
            {
                Console.WriteLine("прих={0} , y={1}, z={2}", i, (y0 + h * f1(i, y0, z0)), (z0 + h * f2(i, y0, z0)));
                y0 = y0 + h * f1(i, y0, z0);
                z0 = z0 + h * f2(i, y0, z0);
            }
        }
        static void runge_system(double x0, double y0, double z0, double h, double xn)//Метод Рунге-Кутта для системы
        {
            double k0, l0, k1, l1, k2, l2, k3, l3;
            for (double i = x0 + h; i <= xn; i = i + h)
            {
                k0 = f1(i, y0, z0);
                l0 = f2(i, y0, z0);
                k1 = f1(i + h / 2, y0 + h * k0 / 2, z0 + h * l0 / 2);
                l1 = f2(i + h / 2, y0 + h * k0 / 2, z0 + h * l0 / 2);
                k2 = f1(i + h / 2, y0 + h * k1 / 2, z0 + h * l1 / 2);
                l2 = f2(i + h / 2, y0 + h * k1 / 2, z0 + h * l1 / 2);
                k3 = f1(i + h / 2, y0 + h * k2 / 2, z0 + h * l2 / 2);
                l3 = f2(i + h / 2, y0 + h * k2 / 2, z0 + h * l2 / 2);
                Console.WriteLine("прих={0} , y={1}, z={2}", i, (y0 + 1 / 6 * h * (k0 + 2 * k1 + 2 * k2 + k3)), (z0 + 1 / 6 * h * (l0 + 2 * l1 + 2 * l2 + l3)));
                y0 = y0 + h * f1(i, y0, z0);
                z0 = z0 + h * f2(i, y0, z0);
                
            }
        }
        static void Main(string[] args)
        {
            double x0 = 0;
            double y0 = 1;
            double z0 = 0.5; 
            double h = 0.1;
            double xn = 1 ;
            Console.WriteLine("Метод Эйлера:");
            euler_system(x0, y0, z0, h, xn);
            Console.WriteLine("Метод Рунге-Кутта:");
            runge_system(x0, y0, z0, h, xn);
        }
    }
}
